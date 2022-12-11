FROM debian:buster

RUN apt update
RUN apt install nginx -y
RUN apt install openssl -y
RUN apt install vim -y
RUN cd /var/www
RUN mkdir test

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt \
-subj "/C=RU/ST=MSK/L=Moscow/O=SomeOrganization/OU=SomeUnit/CN=sometest.com/emailAddress=.someemail@gmail.com"
RUN openssl dhparam -out /etc/ssl/certs/dhparam.pem 2048

COPY ./ssl.conf /etc/nginx/conf.d/ssl.conf
COPY ./index.html /var/www/test/index.html

# RUN rm /etc/nginx/sites-available/default
# RUN rm /etc/nginx/sites-enabled/default
# COPY ./ssl.conf /etc/nginx/sites-available/default
# RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default
# COPY ./docker-entrypoint.sh /home/ayajirob/docker-entrypoint.sh
# RUN chmod 755 /home/ayajirob/docker-entrypoint.sh

ENTRYPOINT service nginx restart && /bin/bash
