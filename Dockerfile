FROM php:apache

RUN curl https://phar.phpunit.de/phpunit-8.5.2.phar -o /usr/local/bin/phpunit
RUN chmod +x /usr/local/bin/phpunit

COPY / /var/www/html

EXPOSE 80:80