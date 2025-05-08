#!/bin/bash
# Start script for Laravel on Railway

# Run Laravel optimizations
php artisan config:cache
php artisan route:cache
php artisan storage:link

# Start PHP server with the actual PORT value
php -S 0.0.0.0:${PORT:-8080} -t public