FROM debian:buster

RUN apt update
RUN apt install nginx -y
RUN apt install openssl -y
RUN apt install wget vim netcat curl net-tools -y

RUN openssl req -x509 -nodes -days 365 \
    -newkey rsa:2048 -keyout \
    /etc/ssl/private/nginx-selfsigned.key \
    -out /etc/ssl/certs/nginx-selfsigned.crt \
    -subj "/C=RU/ST=MSK/L=Moscow/O=SomeOrganization/OU=SomeUnit/CN=./emailAddress=someemail@gmail.com"
    
RUN chmod 777 /etc/ssl/certs/nginx-selfsigned.crt 
RUN chmod 777 /etc/ssl/private/nginx-selfsigned.key 

COPY ./tools/static_site.html /var/www/html/static-site/index.html
COPY ./conf/static_site.conf /etc/nginx/sites-available/default

RUN wget https://github.com/prometheus/node_exporter/releases/download/v1.4.0/node_exporter-1.4.0.linux-amd64.tar.gz && \
    tar xvfz node_exporter-1.4.0.linux-amd64.tar.gz

CMD service nginx start && cd node_exporter-1.4.0.linux-amd64 && ./node_exporter