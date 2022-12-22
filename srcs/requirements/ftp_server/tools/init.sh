#!/bin/bash

useradd -m -p pass -s /bin/bash ayajirob
echo ayajirob | tee -a /etc/vsftpd.userlist

vsftpd