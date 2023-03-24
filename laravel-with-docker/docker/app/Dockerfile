FROM php:8.0-fpm

ENV TZ Asia/Tokyo

RUN apt-get update && \
    apt-get install -y git unzip libzip-dev libicu-dev libonig-dev && \
    docker-php-ext-install intl pdo_mysql zip bcmath

COPY ./docker/app/php.ini /usr/local/etc/php/php.ini
COPY ./src /app
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

WORKDIR /app

RUN chmod o+w /app/storage/logs/
RUN chmod o+w /app/storage/framework/sessions/
RUN chmod o+w /app/storage/framework/views/
