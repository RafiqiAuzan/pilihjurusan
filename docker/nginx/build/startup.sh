#!/bin/bash

APP_ENV=$(grep 'APP_ENV' /var/www/html/.env | sed 's/^.*=//') \
APP_SSL=$(grep 'APP_SSL' /var/www/html/.env | sed 's/^.*=//') \
SERVER_NAME=$(grep 'APP_URL' /var/www/html/.env | sed 's/^.*\///')

if [ "$APP_ENV" == "local" ]; then
    if [ ! -f /etc/nginx/ssl/$SERVER_NAME.crt ]; then
        openssl req -x509 -nodes -days 365 -subj "/CN=Pilih Jurusan CA/OU=Pilih Jurusan IT/O=Pilih Jurusan/L=Jakarta Selatan/C=ID" -addext "subjectAltName=DNS.1:localhost,DNS.2:$SERVER_NAME" -newkey rsa:2048 -keyout /etc/nginx/ssl/$SERVER_NAME.key -out /etc/nginx/ssl/$SERVER_NAME.crt
        chmod 644 /etc/nginx/ssl/*
    fi

    # create a server name based on .env file
    (cd /etc/nginx/sites-available && cp pilihjurusan.conf-example pilihjurusan.conf && sed -i "s/\${SERVER_NAME}/$SERVER_NAME/" pilihjurusan.conf)
else
    if [ ! -f /etc/nginx/ssl/$SERVER_NAME.crt ]; then
        certbot --nginx -d $SERVER_NAME -d www.$SERVER_NAME -n --agree-tos --email abdul.arfan@gmail.com
    fi
    # create a server name based on .env file
    (cd /etc/nginx/sites-available && cp pilihjurusan.conf-example pilihjurusan.conf && sed -i "s/\${SERVER_NAME}/$SERVER_NAME www.$SERVER_NAME/" pilihjurusan.conf)
fi
sed -i "/listen 80;/d" /etc/nginx/sites-available/pilihjurusan.conf
sed -i "/listen \[::\]:80 ipv6only=on;/d" /etc/nginx/sites-available/pilihjurusan.conf
if [ "$APP_SSL" == "secure" ]; then

    echo "server {
            listen 80 default_server;
            listen [::]:80 default_server;
            server_name _ $SERVER_NAME;
            return 301 https://\$host\$request_uri;
        }" >/etc/nginx/conf.d/redirect.conf

else
    sed -i "s/server {/server {\n\tlisten 80;\n\tlisten [::]:80 ipv6only=on;/" /etc/nginx/sites-available/pilihjurusan.conf
    echo "" >/etc/nginx/conf.d/redirect.conf
fi

# cron job to restart nginx every 00:00:00 UTC +7
(
    crontab -l
    echo "0 17 */4 * * nginx -s reload"
) | crontab -

if [ "$APP_ENV" != "local" ]; then
    (
        crontab -l
        echo "30 16 */4 * * certbot renew"
    ) | crontab -
fi
# Start crond in background
crond -l 2 -b

#* * * * * root nginx -s reload >> /var/log/cron.log

# Start nginx in foreground
echo "NGINX started, daemon will restart every 00:00:00 UTC +7 now."
nginx
