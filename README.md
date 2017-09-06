## Description

Dockerized skeleton laravel app, tested with codeception framework using chromedriver

## Environment

PHP 7.0
Laravel 5.5
PhpUnit 5.7
Codeception 2.3.5

## Prerequisites

Install docker from https://docs.docker.com/engine/installation/

Be sure that you have `docker-compose` installed
```
$ docker-compose --version
docker-compose version: 1.7.1
```

Otherwise install `docker-compose` manually https://docs.docker.com/v1.11/compose/install/

##### Note: you should be able to run docker without sudo

## Installation

```
$ git clone git@github.com:aleksmark/laravel-codeception-chromedriver.git
$ cd laravel-codeception-chromedriver
$ cp .env.example .env
$ docker-compose up -d
$ docker exec -it app composer install
```

## Usage

Access the laravel app on your local machine

http://localhost

Run the tests

docker exec -it app ./vendor/bin/codecept run
