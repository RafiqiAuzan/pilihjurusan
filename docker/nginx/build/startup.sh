#!/bin/bash

app_env=$(cat /var/www/html/.env | grep APP_ENV | cut -d "=" -f2)
app_ssl=$(cat /var/www/html/.env | grep APP_SSL | cut -d "=" -f2)
server_name=$(cat /var/www/html/.env | grep APP_URL | cut -d "=" -f2)
server_name="${server_name/https:\/\//""}"
server_name="${server_name/http:\/\//""}"

if [ "$app_env" != "production" ]; then
    if [ ! -f /etc/nginx/ssl/$server_name.crt ]; then
        openssl req -x509 -nodes -days 365 -subj "/CN=Pilih Jurusan CA/OU=Pilih Jurusan IT/O=Pilih Jurusan/L=Jakarta Selatan/C=ID" -addext "subjectAltName=DNS.1:localhost,DNS.2:$server_name" -newkey rsa:2048 -keyout /etc/nginx/ssl/$server_name.key -out /etc/nginx/ssl/$server_name.crt
    fi

    # create a server name based on .env file
    (cd /etc/nginx/sites-available && cp laravel.conf-example laravel.conf && sed -i "s/\${SERVER_NAME}/$server_name/" laravel.conf)
fi

if [ "$app_ssl" == "secure" ]; then
    echo "server {
            listen 80 default_server;
            listen [::]:80 default_server;
            server_name _ $server_name;
            return 301 https://\$host\$request_uri;
        }" >/etc/nginx/conf.d/redirect.conf
else
    echo "" >/etc/nginx/conf.d/redirect.conf
fi

# cron job to restart nginx every 6 hour
(
    crontab -l
    echo "0 0 */4 * * nginx -s reload"
) | crontab -

# Start crond in background
crond -l 2 -b

#* * * * * root nginx -s reload >> /var/log/cron.log

# Start nginx in foreground
echo "NGINX started, daemon will restart every 6 hours now."
nginx
