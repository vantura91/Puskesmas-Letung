# Gunakan PHP 8.2 dengan FPM
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    nano \
    libzip-dev \
    libpq-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    libmcrypt-dev \
    libreadline-dev \
    libonig5 \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy semua file ke container
COPY . .

# Install dependencies Laravel
RUN composer install --no-dev --optimize-autoloader

# Set permission untuk Laravel
RUN chmod -R 775 storage bootstrap/cache

# Jalankan Laravel dengan built-in server
CMD php artisan serve --host=0.0.0.0 --port=8000
