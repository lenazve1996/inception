FROM debian:buster

RUN apt update && \
    apt install -y \
    wget \
    vim \
    netcat \
    curl \
    net-tools \
    php7.3 \
    php7.3-fpm \
    php7.3-mysql \
    mariadb-client \
    sendmail \
    less

RUN mkdir -p /var/www/html/wordpress && \
    chown www-data:www-data /var/www/html/wordpress -R

RUN wget \
    https://github.com/wp-cli/wp-cli/releases/download/v2.7.0/wp-cli-2.7.0.phar && \
    chmod +x wp-cli-2.7.0.phar && \
    mv wp-cli-2.7.0.phar /usr/local/bin/wp

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

RUN mkdir /run/php && \
    touch /run/php/php7.3-fpm.pid;

COPY ./tools/init.sh /root/scripts/init.sh

CMD ["bash", "/root/scripts/init.sh"]