FROM php:7.2.7-apache

# Install Option
RUN docker-php-ext-install pdo_mysql mysqli mbstring

# Change Header Option
COPY php.ini /usr/local/etc/php/

EXPOSE 80
