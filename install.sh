docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php81-composer:latest composer install --ignore-platform-reqs

if [ ! -f ./docker/php/config/opcache.ini ]; then
    cp ./docker/php/config/opcache.ini-example ./docker/php/config/opcache.ini
fi

if [ ! -f ./docker/php/config/xdebug.ini ]; then
    cp ./docker/php/config/xdebug.ini-example ./docker/php/config/xdebug.ini
    echo "xdebug.client_host=$(hostname -I)" >>./docker/php/config/xdebug.ini
else
    recent_host=$(grep "^[^#;]" ./docker/php/config/xdebug.ini | grep 'xdebug.client_host=' | sed 's/^.*=//')
    if [ $(hostname -I) != $recent_host ]; then
        sed -i "s/xdebug.client_host=$recent_host/xdebug.client_host=$(hostname -I)/" ./docker/php/config/xdebug.ini
    fi
fi
