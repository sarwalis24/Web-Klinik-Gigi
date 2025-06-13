FROM php:8.2-fpm

# Install dependencies sistem dan ekstensi PHP
RUN apt-get update && apt-get install -y \
    git curl unzip libzip-dev libicu-dev libonig-dev libpq-dev libxml2-dev tzdata \
    && docker-php-ext-install \
    intl zip pdo_pgsql pdo_mysql mbstring xml bcmath pcntl \
    && docker-php-ext-enable \
    pdo_pgsql pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install Composer dari image composer resmi
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Set direktori kerja ke Laravel project
WORKDIR /var/www

# Set permission untuk Laravel
RUN mkdir -p /var/www/storage /var/www/bootstrap/cache \
    && chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Jalankan container dengan user www-data
USER www-data

EXPOSE 9000
CMD ["php-fpm"]
