FROM php:apache

RUN ln -s /etc/apache2/mods-available/expires.load /etc/apache2/mods-enabled/

WORKDIR /var/www/html
