#!/bin/bash

mkdir -p volumes/mariadb
mkdir -p volumes/wordpress
chmod g+w volumes/mariadb
chmod g+w volumes/wordpress

HOST=$(cat /etc/hosts | grep ayajirob.42.fr)
if [[ ! ${HOST} ]]; then
    sudo su << EOF
        echo "127.0.0.1       ayajirob.42.fr" >> /etc/hosts
EOF
fi