FROM joseluisq/php-fpm:8.2

RUN rm /usr/local/etc/php/conf.d/docker-php-ext-psr.ini
