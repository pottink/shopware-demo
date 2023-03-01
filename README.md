# Shopware Demo

This is a Shopware Demo project

## Installation & usage

This repository contains a local development environment with Docker which contains:

* PHP 8.1
* MySQL 8.0
* nginx
* RabbitMQ + management
* Redis
* MailHog

To setup the local environment and build your local SSL certificates run:

`$ ./sysadmin/docker/init.sh`


## Hosts file

Add following line to your `/etc/hosts` file to make the URL's below accessible.

`127.0.0.1 shopware.local traefik.shopware.local mysql.shopware.local rabbitmq.shopware.local mailhog.shopware.local`

## URL's:

* https://shopware.local
* https://traefik.shopware.local
* https://mailhog.shopware.local:8025
* https://rabbitmq.shopware.local:15672