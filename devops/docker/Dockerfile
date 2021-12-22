FROM anave/php-laravel:8

RUN pecl install -o -f redis; \
    rm -rf /tmp/pear; \
    docker-php-ext-enable redis;

RUN apk update && apk add --no-cache git;

COPY . /var/www/html

RUN cp ./devops/docker/scripts/docker-xdebug.ini /usr/local/etc/php/conf.d/20-xdebug.ini

RUN cp ./devops/docker/scripts/entrypoint.sh /usr/local/bin/entry-almobi
RUN chmod +x /usr/local/bin/entry-almobi

ENTRYPOINT ["entry-almobi"]
