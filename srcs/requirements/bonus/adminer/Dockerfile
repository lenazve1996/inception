FROM debian:buster

RUN apt update && \
    apt install -y \
    vim \
    netcat \
    curl \
    net-tools \
    adminer

RUN a2enconf adminer

CMD apachectl -D FOREGROUND