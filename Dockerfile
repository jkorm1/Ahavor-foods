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
    apache2 \
    libapache2-mod-php

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

COPY . /var/www

# Install Heroku PHP buildpack
RUN composer require heroku/heroku-buildpack-php --no-interaction

# Set permissions
RUN chown -R www-data:www-data /var/www

# Expose port 8080 (Railway default)
EXPOSE 8080

# Set the CMD to your start command
CMD ["vendor/bin/heroku-php-apache2", "public/"]