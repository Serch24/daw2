FROM php:8.0-apache 
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install gd
COPY ./php.ini /usr/local/etc/php/conf.d/php.ini
