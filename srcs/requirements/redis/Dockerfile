FROM debian:buster

RUN apt update
RUN apt install redis -y

COPY ./conf/redis.conf /etc/redis/redis.conf

CMD [ "redis-server" ]

