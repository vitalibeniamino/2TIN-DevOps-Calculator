FROM php:7.4-apache
COPY . /var/www/html/
EXPOSE 80

RUN apt-get update && apt-get install -y zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
RUN composer install