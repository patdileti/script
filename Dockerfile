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

# Set permissions
RUN chown -R www-data:www-data /var/www \
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

# Create entrypoint script
RUN echo '#!/bin/sh\n\
chown -R www-data:www-data /var/www\n\
php-fpm' > /usr/local/bin/docker-entrypoint.sh \
    && chmod +x /usr/local/bin/docker-entrypoint.sh

# Expose port 9000
EXPOSE 9000

CMD ["/usr/local/bin/docker-entrypoint.sh"]