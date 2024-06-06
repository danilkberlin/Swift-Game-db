FROM php:8.3.4-apache-bullseye

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_mysql


WORKDIR /var/www/html

COPY .htaccess .
COPY index.php .
RUN a2enmod rewrite 
