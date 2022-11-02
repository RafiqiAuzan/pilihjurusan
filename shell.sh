#!/bin/sh
dockerdir=$(cat .env | grep DOCKER_DIR | cut -d "=" -f2)

if [ -z "$1" ] || ([ "$1" != "php" ] && [ "$1" != "start" ] && [ "$1" != "stop" ] && [ "$1" != "restart" ]); then
  echo "Run devilbox command from your local project. Use ./shell.sh [option]"
  echo "Options available are [ php | start | stop | restart ]"
fi

start() {
  (cd $dockerdir && docker compose up -d httpd php mysql redis mailhog)
}

stop() {
  (cd $dockerdir && docker compose down)
}

restart() {
  (cd $dockerdir && docker compose down && docker compose up -d httpd php mysql redis mailhog)
}

php() {
  (cd $dockerdir && ./shell.sh)
}

case $1 in
start)
  "$@"
  exit
  ;;
stop)
  "$@"
  exit
  ;;
restart)
  "$@"
  exit
  ;;
php)
  "$@"
  exit
  ;;
esac
