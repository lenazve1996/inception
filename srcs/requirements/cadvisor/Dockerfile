FROM debian:buster

RUN apt update && \
    apt install -y \
    vim \
    netcat \
    curl \
    wget \
    net-tools

RUN curl -LO url -LO \
    https://github.com/google/cadvisor/releases/download/v0.46.0/cadvisor-v0.46.0-linux-amd64 && \
    chmod +x cadvisor-v0.46.0-linux-amd64

CMD ./cadvisor-v0.46.0-linux-amd64