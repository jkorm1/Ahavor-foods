#!/bin/bash
# Start script for Laravel on Railway

# Run Laravel optimizations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link if it doesn't exist
php artisan storage:link || true

# Get the PORT from environment variable or default to 8080
PORT="${PORT:-8080}"
echo "Using PORT: $PORT"

# Directly write the correct configuration instead of using sed
echo "Listen $PORT" > /etc/apache2/ports.conf
echo "ServerName localhost" >> /etc/apache2/ports.conf

# Update the VirtualHost configuration
cat > /etc/apache2/sites-available/000-default.conf << EOF
<VirtualHost *:$PORT>
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/public
    
    <Directory /var/www/html/public>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog \${APACHE_LOG_DIR}/error.log
    CustomLog \${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
EOF

# Start Apache
apache2-foreground