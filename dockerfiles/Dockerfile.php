FROM php:8.2.12-cli-alpine AS base
WORKDIR /srv

COPY --from=composer:2.7.1 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

COPY php/composer.json composer.json
COPY php/composer.lock composer.lock

RUN /usr/bin/composer install --prefer-dist --no-progress
