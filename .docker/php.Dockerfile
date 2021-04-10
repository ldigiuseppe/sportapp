FROM php:8-fpm

RUN apt-get update && \
    apt-get install -y \
    git \ 
    zip  \
    vim 

RUN curl --silent --show-error https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Install php extensions
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli 
RUN apt-get install -y libicu-dev 
RUN docker-php-ext-configure intl 
RUN docker-php-ext-install intl

RUN usermod -u 1000 www-data

# Set working directory
WORKDIR /var/www/html