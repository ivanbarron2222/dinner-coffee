# syntax=docker/dockerfile:1

FROM composer:2 AS composer
WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-progress --optimize-autoloader

COPY . .
RUN composer dump-autoload --optimize

FROM node:20 AS assets
WORKDIR /app

COPY package.json package-lock.json* pnpm-lock.yaml* yarn.lock* ./
RUN if [ -f package-lock.json ]; then npm ci; else npm install; fi

COPY resources resources
COPY public public
COPY vite.config.js .
RUN npm run build

FROM php:8.2-apache
WORKDIR /var/www/html

RUN a2enmod rewrite \
    && docker-php-ext-install pdo_mysql pdo_sqlite

COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf
COPY --from=composer /app /var/www/html
COPY --from=assets /app/public/build /var/www/html/public/build

RUN chown -R www-data:www-data storage bootstrap/cache
