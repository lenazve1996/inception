FROM debian:buster

RUN apt update
RUN apt install mariadb-server -y
RUN apt install vim netcat curl net-tools -y
COPY ./tools/init.sh /root/scripts/init.sh
COPY ./conf/mysqld.conf /configs/mysqld.conf

RUN cat /configs/mysqld.conf >> /etc/mysql/my.cnf

RUN bash /root/scripts/init.sh

RUN rm -rf /configs

CMD  mysqld_safe