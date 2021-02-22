FROM serch24/phpini
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
        libjpeg-dev \
        libpng-dev \
    && docker-php-ext-configure gd \
        --with-freetype \
    && docker-php-ext-install gd \
    && docker-php-ext-enable gd
