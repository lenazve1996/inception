FROM debian:buster

RUN apt update && \
    apt install redis -y

COPY ./conf/redis.conf /etc/redis/redis.conf

CMD [ "redis-server" ]

