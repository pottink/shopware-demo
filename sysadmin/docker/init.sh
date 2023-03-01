#!/usr/bin/env bash

# Generate self-signed certificates
if [[ ! -f ./sysadmin/docker/ssl/local.crt || ! -f ./sysadmin/docker/ssl/local.key ]]; then
  ./sysadmin/docker/ssl/generate.sh
fi

# Setup .env
if [ ! -a ".env" ]; then
  echo "Copying .env"
  cp -pRf .env.dist .env
fi

docker-compose up -d

echo "Installing dependencies"
docker-compose exec -T application composer install --no-scripts

echo "Installing Shopware if necessary"
mkdir -p ./config/jwt
docker-compose exec -T application php bin/console system:generate-jwt
docker-compose exec -T application setfacl -m u:www-data:r config/jwt/private.pem
docker-compose exec -T application setfacl -m u:www-data:r config/jwt/public.pem
docker-compose exec -T application php bin/console system:install --create-database --basic-setup

echo "Configuring GrumPHP"
./vendor/bin/grumphp git:init

echo "Application has started!"
docker-compose logs