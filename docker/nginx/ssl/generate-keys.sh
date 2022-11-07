openssl genrsa -out "./pilihjurusan-dev.key" 2048
chmod 644 ./pilihjurusan-dev.key
openssl req -new -key "./pilihjurusan-dev.key" -out "./pilihjurusan-dev.csr" -subj "/CN=pilihjurusan-dev/O=pilihjurusan-dev/C=UK"
openssl x509 -req -days 365 -in "./pilihjurusan-dev.csr" -signkey "./pilihjurusan-dev.key" -out "./pilihjurusan-dev.crt"
