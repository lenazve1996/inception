FROM debian:buster

RUN apt update
RUN apt install -y  wget \
                    vim \
                    netcat \
                    curl \
                    net-tools \
                    vsftpd

COPY ./conf/vsftpd.conf /etc/vsftpd.conf 
COPY ./tools/init.sh /root/scripts/init.sh
# RUN useradd -m -p pass -s /bin/bash ayajirob
# RUN echo ayajirob | tee -a /etc/vsftpd.userlist

CMD bash /root/scripts/init.sh