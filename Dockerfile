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
    nginx

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

COPY . /var/www

# Install Composer dependencies
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Create nginx configuration
RUN echo 'server {\n\
    listen 8080;\n\
    server_name _;\n\
    root /var/www/public;\n\
    index index.php;\n\
    charset utf-8;\n\
    location / {\n\
    try_files $uri $uri/ /index.php?$query_string;\n\
    }\n\
    location = /favicon.ico { access_log off; log_not_found off; }\n\
    location = /robots.txt  { access_log off; log_not_found off; }\n\
    error_page 404 /index.php;\n\
    location ~ \.php$ {\n\
    fastcgi_pass 127.0.0.1:9000;\n\
    fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;\n\
    include fastcgi_params;\n\
    }\n\
    location ~ /\.(?!well-known).* {\n\
    deny all;\n\
    }\n\
    }' > /etc/nginx/sites-available/default

# Create a startup script
RUN echo '#!/bin/bash\n\
    php artisan config:cache\n\
    php artisan route:cache\n\
    php artisan storage:link\n\
    chmod -R 775 /var/www/storage\n\
    chmod -R 775 /var/www/bootstrap/cache\n\
    service nginx start\n\
    php-fpm\n\
    ' > /var/www/start.sh && chmod +x /var/www/start.sh

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 8080 (Railway default)
EXPOSE 8080

# Start Nginx & PHP-FPM
CMD ["/var/www/start.sh"]