FROM php:7-apache

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=on" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN apt-get update

RUN apt-get install curl
RUN apt-get install libcurl3-dev

# Magento Required
RUN docker-php-ext-install curl

RUN apt-get install -y libxml2-dev

RUN docker-php-ext-install dom

RUN apt-get install -y libpng-dev zlib1g-dev

RUN docker-php-ext-install gd
RUN docker-php-ext-install hash
RUN docker-php-ext-install iconv

RUN apt-get install -y libmcrypt-dev

RUN yes | pecl install mcrypt-1.0.1

RUN docker-php-ext-enable mcrypt

RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install simplexml
RUN docker-php-ext-install soap

RUN a2enmod rewrite

