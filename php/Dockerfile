FROM php:8.2-apache

RUN docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli

# Agar Apache bisa rewrite (opsional)
RUN a2enmod rewrite
