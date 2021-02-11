FROM php:8.0-apache 
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
        libjpeg-dev \
        libpng-dev \
    && docker-php-ext-configure gd \
        --with-freetype \
    && docker-php-ext-install gd \
    && docker-php-ext-enable gd

COPY ./php.ini /usr/local/etc/php/conf.d/php.ini
