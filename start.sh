#!/bin/bash

# Debug: Print environment variables
echo "Environment variables:"
printenv | sort
echo "---------------------"

# After printing environment variables
echo "Checking Apache..."
which apache2-foreground
echo "Apache binary status: $?"
ls -la /usr/local/bin/apache2* || echo "No Apache binaries found"
echo "Checking Apache configuration..."
cat /etc/apache2/ports.conf
echo "---------------------"

# Get the PORT from environment variable or default to 8080
export PORT="${PORT:-8080}"
echo "Using PORT: $PORT"

# Run Laravel optimizations
cd /var/www/html
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link || true

# Start PHP's built-in server
php artisan serve --host=0.0.0.0 --port=$PORT