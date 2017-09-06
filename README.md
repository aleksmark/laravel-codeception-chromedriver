## Description

Dockerized skeleton laravel app, tested with codeception framework using chromedriver

## Environment

- PHP 7.0
- Laravel 5.5
- PhpUnit 5.7
- Codeception 2.3.5

## Prerequisites

Docker 

https://docs.docker.com/engine/installation/

Docker-compose

https://docs.docker.com/v1.11/compose/install/

##### Note: you should be able to run docker without sudo

## Installation

Clone the project
```
$ git clone git@github.com:aleksmark/laravel-codeception-chromedriver.git
$ cd laravel-codeception-chromedriver
```

Setup the laravel env
```
$ cp .env.example .env
```

Build the docker environment
```
$ docker-compose up -d
```

Install composer dependencies
```
$ docker exec -it app composer install
```

## Usage

Access the laravel app on your local machine

http://localhost

Run the tests

```
$ docker exec -it app ./vendor/bin/codecept run
```
