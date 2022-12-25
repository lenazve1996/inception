FROM debian:buster

RUN apt update && \
    apt install -y \
    vim \
    netcat \
    curl \
    wget \
    net-tools

RUN curl -LO url -LO  https://github.com/prometheus/prometheus/releases/download/v2.37.5/prometheus-2.37.5.linux-amd64.tar.gz
RUN tar xvfz prometheus-2.37.5.linux-amd64.tar.gz

COPY ./conf/prometheus.yml prometheus-2.37.5.linux-amd64/prometheus.yml

WORKDIR /prometheus-2.37.5.linux-amd64

CMD ./prometheus


