#!/bin/bash
# Start script for Laravel on Railway

# Run Laravel optimizations
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link

# Set the correct port in Apache
sed -i "s/Listen 8080/Listen \${PORT:-8080}/" /etc/apache2/ports.conf
sed -i "s/:8080/:${PORT:-8080}/" /etc/apache2/sites-available/000-default.conf

# Start Apache
apache2-foreground