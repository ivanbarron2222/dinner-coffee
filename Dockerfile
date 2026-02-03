FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpq-dev \
 && docker-php-ext-install pdo pdo_mysql pdo_pgsql zip \
 && a2enmod rewrite \
 && rm -rf /var/lib/apt/lists/*

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
 && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# 👇 THIS IS THE IMPORTANT FIX
COPY . .

RUN composer install --no-dev --prefer-dist --no-interaction --no-progress --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 10000

COPY render-start.sh /render-start.sh
RUN chmod +x /render-start.sh

CMD ["/render-start.sh"]
