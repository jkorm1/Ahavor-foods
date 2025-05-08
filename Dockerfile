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

# Configure Nginx
RUN echo 'server {\n\
    listen 8080;\n\
    root /var/www/public;\n\
    index index.php index.html;\n\
    location / {\n\
    try_files $uri $uri/ /index.php?$query_string;\n\
    }\n\
    location ~ \.php$ {\n\
    fastcgi_pass 127.0.0.1:9000;\n\
    fastcgi_index index.php;\n\
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;\n\
    include fastcgi_params;\n\
    }\n\
    }' > /etc/nginx/sites-available/default

# Create symbolic link for the default site configuration
RUN ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 8080 (Railway default)
EXPOSE 8080

# Start Nginx & PHP-FPM
CMD sh -c "php artisan config:cache && php artisan route:cache && service nginx start && php-fpm"