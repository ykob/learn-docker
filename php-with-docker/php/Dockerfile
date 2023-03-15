FROM php:8.2.3-apache
COPY ./php.ini /usr/local/etc/php/
RUN apt-get update && docker-php-ext-install mysqli
