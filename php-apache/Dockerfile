FROM php:7.1-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libicu-dev \
        libzip-dev \
        zip \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl
RUN docker-php-ext-install pdo pdo_mysql zip
RUN a2enmod rewrite
RUN usermod -u 1000 www-data
RUN usermod -G staff www-data
