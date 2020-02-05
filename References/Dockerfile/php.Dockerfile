FROM enamba/php-phpunit-bcp-example

COPY / /var/www/html

RUN /usr/local/bin/phpunit /var/www/html/tests/CalcTest.php

RUN cat /var/www/html/config/app.json
RUN cat /var/www/html/config/dev.json

EXPOSE 6666