FROM debian:buster

RUN apt update
RUN apt install nginx -y
RUN apt install openssl -y
RUN apt install vim netcat curl net-tools -y

RUN openssl req -x509 -nodes -days 365 \
    -newkey rsa:2048 -keyout \
    /etc/ssl/private/nginx-selfsigned.key \
    -out /etc/ssl/certs/nginx-selfsigned.crt \
    -subj "/C=RU/ST=MSK/L=Moscow/O=SomeOrganization/OU=SomeUnit/CN=ayajirob.42.fr/emailAddress=someemail@gmail.com"
    
RUN chmod 777 /etc/ssl/certs/nginx-selfsigned.crt 
RUN chmod 777 /etc/ssl/private/nginx-selfsigned.key 

COPY ./conf/nginx.conf /etc/nginx/sites-available/default

CMD [ "nginx", "-g", "daemon off;" ]

# ENTRYPOINT service nginx restart && /bin/bash

