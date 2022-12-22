#!/bin/bash

if [ ! -d "/var/www/html/wordpress/wp-admin" ]; then
    # mkdir -p /var/www/html/wordpress
    # chmod -R 775 /var/www/html/wordpress
    # chown www-data:www-data /var/www/html/wordpress -R

    cd /var/www/html/wordpress
    wp core download --locale=en_GB  --allow-root

    wp config create --dbname=wordpress --dbuser=user \
        --dbpass=pass --allow-root --dbhost=171.22.0.2

    wp config set WP_REDIS_HOST "redis" --allow-root

    wp core install --url=ayajirob.42.fr \
        --title="Wordpress" --admin_name=ayajirob \
        --admin_password=pass --allow-root \
        --admin_email=ayajirob@example.com

    wp user create user user@example.com --role=editor \
        --user_pass=pass --allow-root

    wp theme install blockmag --allow-root

    wp theme activate blockmag --allow-root

    wp plugin install redis-cache --activate --allow-root

fi

php-fpm7.3 -F