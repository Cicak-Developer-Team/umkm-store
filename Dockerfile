FROM php:8.2-fpm

# Install dependensi sistem & ekstensi PHP untuk Laravel
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install ekstensi MySQL & pendukung Laravel
RUN docker-php-ext-install pdo_mysql mbstring gd bcmath

# Copy Composer resmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Tentukan direktori kerja di dalam kontainer
WORKDIR /var/www/html