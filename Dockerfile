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
    libzip-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && docker-php-ext-install xml \
    && docker-php-ext-install ctype \
    && docker-php-ext-install fileinfo \
    && docker-php-ext-install json \
    && docker-php-ext-install iconv

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy custom php.ini settings
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Copy application files
COPY . /var/www

# Set permissions
RUN chmod -R 775 storage core/bootstrap/cache core/lang core/plugins core/storage \
    core/storage/framework core/storage/framework/cache core/storage/framework/cache/data \
    core/storage/framework/sessions core/storage/framework/views core/storage/logs \
    && chown -R www-data:www-data /var/www

# Expose port 9000
EXPOSE 9000

CMD ["php-fpm"]