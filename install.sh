docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    erstevn/sail-php:latest \
    composer install --ignore-platform-reqs
