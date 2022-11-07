docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
cp ./docker/php/config/opcache.ini-example ./docker/php/config/opcache.ini
cp ./docker/php/config/xdebug.ini-example ./docker/php/config/xdebug.ini
echo "xdebug.client_host=$(hostname -I)" >>./docker/php/config/xdebug.ini
