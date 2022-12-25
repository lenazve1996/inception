#!/bin/bash

service mysql start

mysql -u root << SQL_QUERY
    CREATE DATABASE wordpress;
    CREATE USER "user"@"%" IDENTIFIED BY "pass";
    GRANT ALL PRIVILEGES ON *.* TO "user"@"%";
    ALTER USER 'root'@'localhost' IDENTIFIED BY "pass";
    FLUSH PRIVILEGES;
SQL_QUERY

service mysql stop
