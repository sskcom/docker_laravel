FROM php:8.0-fpm

ENV TZ Asia/Tokyo

RUN apt-get update && \
	apt-get install -y git unzip libzip-dev libicu-dev libonig-dev && \
	docker-php-ext-install intl pdo_mysql zip bcmath
		
COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN mkdir /app

WORKDIR /app

# Laravel プロジェクトを作成する
RUN composer create-project --prefer-dist laravel/laravel .

# 所有者変更
RUN chown www-data:www-data ./storage/ -R 

