FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    netcat-traditional \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install exif \
    && docker-php-ext-install bcmath \
    && docker-php-ext-configure gd \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy composer files first
COPY ./core/composer.json ./core/composer.lock ./core/

# Set working directory to core for composer install
WORKDIR /var/www/core

# Install composer dependencies
RUN composer install --no-scripts --no-autoloader

# Copy custom php.ini settings
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Create necessary directories and set permissions
RUN mkdir -p /var/www/storage \
    /var/www/core/bootstrap/cache \
    /var/www/core/lang \
    /var/www/core/plugins \
    /var/www/core/storage \
    /var/www/core/storage/framework \
    /var/www/core/storage/framework/cache \
    /var/www/core/storage/framework/cache/data \
    /var/www/core/storage/framework/sessions \
    /var/www/core/storage/framework/views \
    /var/www/core/storage/logs

# Copy application files
COPY . /var/www/

# Regenerate composer autoload files
RUN cd /var/www/core && composer dump-autoload --optimize

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && find /var/www -type f -exec chmod 644 {} \; \
    && find /var/www -type d -exec chmod 755 {} \; \
    && chmod -R 775 /var/www/storage \
    /var/www/core/bootstrap/cache \
    /var/www/core/lang \
    /var/www/core/plugins \
    /var/www/core/storage \
    /var/www/core/storage/framework \
    /var/www/core/storage/framework/cache \
    /var/www/core/storage/framework/cache/data \
    /var/www/core/storage/framework/sessions \
    /var/www/core/storage/framework/views \
    /var/www/core/storage/logs

# Configure PHP-FPM to run as www-data
RUN sed -i 's/user = www-data/user = www-data/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/group = www-data/group = www-data/' /usr/local/etc/php-fpm.d/www.conf

# Create entrypoint script
RUN echo '#!/bin/sh\n\
cd /var/www/core\n\
chown -R www-data:www-data /var/www\n\
composer dump-autoload --optimize\n\
if [ ! -f .env ]; then\n\
    cp .env.example .env\n\
fi\n\
if [ ! -f .env ] || [ -z "$(grep "^APP_KEY=" .env)" ] || [ "$(grep "^APP_KEY=" .env | cut -d"=" -f2)" = "" ]; then\n\
    php artisan key:generate\n\
fi\n\
php artisan config:clear\n\
php artisan cache:clear\n\
\n\
# Wait for MySQL to be ready\n\
echo "Waiting for MySQL..."\n\
while ! nc -z db 3306; do\n\
  sleep 1\n\
done\n\
echo "MySQL is ready!"\n\
\n\
# Run migrations\n\
php artisan migrate --force || true\n\
\n\
cd /var/www\n\
php-fpm' > /usr/local/bin/docker-entrypoint.sh \
    && chmod +x /usr/local/bin/docker-entrypoint.sh

# Set working directory back to /var/www
WORKDIR /var/www

# Expose port 9000
EXPOSE 9000

CMD ["/usr/local/bin/docker-entrypoint.sh"]