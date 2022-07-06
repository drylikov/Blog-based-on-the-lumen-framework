FROM php:7.2-fpm

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils zip unzip git libmcrypt-dev libpq-dev
RUN apt-get install -y bash-completion

RUN apt-get update -y && \
    apt-get install -y libmcrypt-dev && \
    pecl install mcrypt-1.0.1 && \
    pecl install xdebug-2.7.0 && \
    docker-php-ext-enable mcrypt

RUN docker-php-ext-install pdo_pgsql

ENV COMPOSER_ALLOW_SUPERUSER="1"
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

COPY ./ /app
WORKDIR /app

# Need fixed this shit. add --no-dev for prod.
# make container composer
CMD bash -c "composer install --no-interaction --no-ansi --no-suggest --prefer-dist && php-fpm"

