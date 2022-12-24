#!/bin/bash

if [ ! -d "/var/www/html/wordpress/wp-admin" ]; then

    cd /var/www/html/wordpress
    wp core download --locale=en_GB  --allow-root

    wp config create --dbname=wordpress --dbuser=$MARIADB_USER \
        --dbpass=$MARIADB_PASS --allow-root --dbhost=mariadb

    wp config set WP_REDIS_HOST "redis" --allow-root

    wp core install --url=$DOMAIN_NAME \
        --title="Wordpress" --admin_name=$ADMIN_USER \
        --admin_password=$ADMIN_PASS --allow-root \
        --admin_email=$ADMIN_USER@example.com

    wp user create $USER $USER@example.com --role=editor \
        --user_pass=$USER_PASS --allow-root

    wp theme install blockmag --allow-root

    wp theme activate blockmag --allow-root

    wp plugin install redis-cache --activate --allow-root

fi

php-fpm7.3 -F