FROM debian:buster

RUN apt update &&\
    apt install -y \
    vim \
    netcat \
    curl \
    net-tools \
    mariadb-server


COPY ./tools/init.sh /root/scripts/init.sh
COPY ./conf/mysqld.conf /configs/mysqld.conf

RUN cat /configs/mysqld.conf >> /etc/mysql/my.cnf 

RUN bash /root/scripts/init.sh

RUN rm -rf /configs

CMD  mysqld_safe