# ------------------------------------------------------
# Production WebApp (Frontend & Backend) Deploy
# ------------------------------------------------------
FROM php:7.4-apache

RUN docker-php-ext-install mysqli && a2enmod rewrite

COPY ./ /var/www/html/

EXPOSE 80
