FROM composer:2.5.1 as build
WORKDIR /app
COPY . /app
RUN apk add --update openssl zip unzip git
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install
CMD php artisan migrate 
CMD php artisan serve --host=0.0.0.0 --port=8182
EXPOSE 8182

ADD . /var/www

ADD ./public /var/www/html