FROM php:7.2.2-apache

RUN docker-php-ext-install pdo_mysql
CMD apache2-foreground
