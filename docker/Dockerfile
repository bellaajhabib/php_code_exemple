FROM php:8.1-apache
ENV APP_HOME /var/www/html

RUN echo "php"\
    && apt-get update \
    &&  apt-get install -y --no-install-recommends \
        locales apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev unzip \
    &&  curl -sS https://getcomposer.org/installer | php -- \
    &&  mv composer.phar /usr/local/bin/composer \
    &&  pecl install apcu && docker-php-ext-enable apcu\
    && docker-php-ext-configure \
            intl \
