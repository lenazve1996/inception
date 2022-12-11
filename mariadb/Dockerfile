FROM debian:buster

ENV MARIADB_USER=user
ENV MARIADB_PASS=pass

RUN apt update
RUN apt install mariadb-server -y
RUN apt install vim -y
COPY ./init.sh /scripts/init.sh

ENTRYPOINT service mysql start && sh /scripts/init.sh && /bin/bash
CMD ["mysqld"]
# RUN mysql_secure_installation