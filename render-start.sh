#!/usr/bin/env bash
set -e

# Make Apache listen on Render's assigned port
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/:80/:${PORT}/" /etc/apache2/sites-available/000-default.conf

# Laravel cache clears (safe)
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true

exec apache2-foreground
