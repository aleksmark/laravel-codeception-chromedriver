FROM ubuntu:16.04

ENV LANG=C.UTF-8 \
    DEBIAN_FRONTEND=noninteractive

RUN apt-get update && \
    apt-get -y upgrade && \
    apt-get -y install --fix-missing \
        supervisor \
        nginx \
        curl \
        php7.0-fpm \
        php7.0-mbstring \
        php7.0-zip \
        php7.0-xml \
        php7.0-curl && \
        rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer && \
    chmod +x /usr/local/bin/composer

WORKDIR /var/www

RUN mkdir /var/run/php/

ADD configs/php.ini /etc/php/7.0/fpm/conf.d/99-custom.ini
ADD configs/www.conf /etc/php/7.0/fpm/pool.d/www.conf
ADD configs/supervisord.conf /etc/supervisord.conf
ADD configs/nginx.conf /etc/nginx/nginx.conf

RUN useradd -u 1000 1000

ENTRYPOINT ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisord.conf"]
