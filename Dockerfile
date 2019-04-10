FROM php:7.2-apache
LABEL maintainer="leon.gregori@stud.akad.de"
# sql client library is needed
RUN docker-php-ext-install mysqli
# src contain php app and db init sql scripts
COPY src/ /var/www/html/

