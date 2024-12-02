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

# Create log directories
RUN mkdir -p /var/log/php

# Set environment variables
ENV APP_NAME=MenuQR \
    APP_ENV=production \
    APP_DEBUG=true \
    APP_URL=https://difyserver-menuqrapp.o4nnnn.easypanel.host \
    LOG_CHANNEL=stack \
    LOG_LEVEL=debug \
    DB_CONNECTION=mysql \
    DB_HOST=difyserver_menuqrdb \
    DB_PORT=3306 \
    DB_DATABASE=difyserver \
    DB_USERNAME=mysql \
    DB_PASSWORD=5be557415b86d4fc437a \
    BROADCAST_DRIVER=log \
    CACHE_DRIVER=file \
    FILESYSTEM_DISK=local \
    QUEUE_CONNECTION=sync \
    SESSION_DRIVER=file \
    SESSION_LIFETIME=120 \
    TRUSTED_PROXIES=* \
    PHP_MEMORY_LIMIT=1024M \
    PHP_POST_MAX_SIZE=100M \
    PHP_UPLOAD_MAX_FILESIZE=100M

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
    /var/www/core/storage/logs \
    && chmod -R 775 /var/log/php

# Configure PHP-FPM to run as www-data
RUN sed -i 's/user = www-data/user = www-data/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/group = www-data/group = www-data/' /usr/local/etc/php-fpm.d/www.conf \
    && echo "php_admin_flag[log_errors] = on" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "php_admin_value[error_log] = /var/log/php/fpm-error.log" >> /usr/local/etc/php-fpm.d/www.conf


# Create database test script
RUN echo '<?php\n\
error_reporting(E_ALL);\n\
ini_set("display_errors", 1);\n\
\n\
echo "Environment variables dump:\\n";\n\
$env = getenv();\n\
print_r($env);\n\
echo "\\n_ENV variables:\\n";\n\
print_r($_ENV);\n\
echo "\\n";\n\
\n\
function getEnvVar($name) {\n\
    // Try multiple ways to get the environment variable\n\
    $methods = [\n\
        "getenv" => function($name) { return getenv($name); },\n\
        "_ENV" => function($name) { return isset($_ENV[$name]) ? $_ENV[$name] : false; },\n\
        "env" => function($name) { return isset($env[$name]) ? $env[$name] : false; },\n\
    ];\n\
    \n\
    foreach ($methods as $method => $getter) {\n\
        $value = $getter($name);\n\
        echo "Trying $method for $name: " . ($value === false ? "not set" : "value = $value") . "\\n";\n\
        if ($value !== false && !empty($value)) {\n\
            return $value;\n\
        }\n\
    }\n\
    \n\
    throw new Exception("Environment variable $name is not set or empty in any context");\n\
}\n\
\n\
try {\n\
    // Get and validate environment variables\n\
    $requiredVars = ["DB_HOST", "DB_PORT", "DB_DATABASE", "DB_USERNAME", "DB_PASSWORD"];\n\
    $config = [];\n\
    \n\
    foreach ($requiredVars as $var) {\n\
        try {\n\
            $config[$var] = getEnvVar($var);\n\
        } catch (Exception $e) {\n\
            echo "Error: " . $e->getMessage() . "\\n";\n\
            exit(1);\n\
        }\n\
    }\n\
    \n\
    echo "\\nFinal configuration values:\\n";\n\
    print_r($config);\n\
    echo "\\n";\n\
    \n\
    echo "Testing database connection...\\n";\n\
    \n\
    // Test DNS resolution first\n\
    echo "Resolving hostname " . $config["DB_HOST"] . "...\\n";\n\
    $ip = gethostbyname($config["DB_HOST"]);\n\
    if ($ip === $config["DB_HOST"]) {\n\
        throw new Exception("Could not resolve hostname " . $config["DB_HOST"]);\n\
    }\n\
    echo "Resolved to IP: $ip\\n";\n\
    \n\
    // Test connection without database first\n\
    $dsn = sprintf("mysql:host=%s;port=%s", $config["DB_HOST"], $config["DB_PORT"]);\n\
    echo "DSN without database: $dsn\\n";\n\
    echo "Trying to connect to MySQL server...\\n";\n\
    $conn = new PDO($dsn, $config["DB_USERNAME"], $config["DB_PASSWORD"]);\n\
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);\n\
    echo "Successfully connected to MySQL server!\\n";\n\
    \n\
    // Now try with database\n\
    $dsn = sprintf("mysql:host=%s;port=%s;dbname=%s", $config["DB_HOST"], $config["DB_PORT"], $config["DB_DATABASE"]);\n\
    echo "DSN with database: $dsn\\n";\n\
    echo "Trying to connect to database " . $config["DB_DATABASE"] . "...\\n";\n\
    $conn = new PDO($dsn, $config["DB_USERNAME"], $config["DB_PASSWORD"]);\n\
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);\n\
    echo "Successfully connected to database!\\n";\n\
    \n\
    // Test query\n\
    $stmt = $conn->query("SELECT VERSION() as version");\n\
    $row = $stmt->fetch();\n\
    echo "MySQL Version: " . $row["version"] . "\\n";\n\
    \n\
} catch(PDOException $e) {\n\
    echo "Connection failed: " . $e->getMessage() . "\\n";\n\
    echo "Error code: " . $e->getCode() . "\\n";\n\
    exit(1);\n\
} catch(Exception $e) {\n\
    echo "Error: " . $e->getMessage() . "\\n";\n\
    exit(1);\n\
}\n' > /var/www/core/db_test.php



# Create entrypoint script
RUN echo '#!/bin/sh\n\
cd /var/www/core\n\
chown -R www-data:www-data /var/www\n\
chown -R www-data:www-data /var/log/php\n\
composer dump-autoload --optimize\n\
if [ ! -f .env ]; then\n\
    cp .env.example .env\n\
    echo "Created new .env file"\n\
fi\n\
if [ ! -f .env ] || [ -z "$(grep "^APP_KEY=" .env)" ] || [ "$(grep "^APP_KEY=" .env | cut -d"=" -f2)" = "" ]; then\n\
    php artisan key:generate\n\
    echo "Generated new application key"\n\
fi\n\
echo "\\nTesting database connection..."\n\
php db_test.php\n\
if [ $? -ne 0 ]; then\n\
    echo "Database connection test failed"\n\
    exit 1\n\
fi\n\
echo "\\nClearing configuration cache..."\n\
php artisan config:clear\n\
echo "Clearing application cache..."\n\
php artisan cache:clear\n\
echo "Running database migrations..."\n\
php artisan migrate --force || true\n\
cd /var/www\n\
echo "Starting PHP-FPM..."\n\
php-fpm' > /usr/local/bin/docker-entrypoint.sh \
    && chmod +x /usr/local/bin/docker-entrypoint.sh

# Set working directory back to /var/www
WORKDIR /var/www

# Expose port 9000
EXPOSE 9000

CMD ["/usr/local/bin/docker-entrypoint.sh"]