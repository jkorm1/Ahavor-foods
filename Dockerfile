# Use PHP 8.2 with Apache
FROM php:8.2-apache

# Enable Apache modules
RUN a2enmod rewrite

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Apache configuration
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Set Apache to listen on Railway's expected port
RUN echo 'Listen 8080' >> /etc/apache2/ports.conf

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . /var/www/html

# Install Composer dependencies
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Set Apache document root to Laravel public directory
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN echo 'DocumentRoot /var/www/html/public' >> /etc/apache2/sites-available/000-default.conf
RUN echo 'DocumentRoot /var/www/html/public' >> /etc/apache2/apache2.conf

# Allow .htaccess overrides for Laravel
RUN echo '<Directory /var/www/html/public>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
    </Directory>' >> /etc/apache2/apache2.conf

# Set permissions for Laravel directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public

# Ensure Laravel's storage symlink exists
RUN if [ ! -L /var/www/html/public/storage ]; then php artisan storage:link; fi

# Expose the correct port for Railway
EXPOSE 8080

# Start Apache using the startup script
RUN chmod +x /var/www/html/start.sh
CMD ["/bin/bash", "-c", "/var/www/html/start.sh"]

