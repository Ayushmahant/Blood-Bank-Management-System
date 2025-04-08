FROM php:8.1-apache

COPY . /var/www/html/

RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
