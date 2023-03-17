FROM php:8-apache

RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

COPY index.php /var/www/html/

EXPOSE 80