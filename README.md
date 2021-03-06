# laravel-todo

[![Build Status](https://travis-ci.org/cncgl/laravel-todo.svg?branch=master)](https://travis-ci.org/cncgl/laravel-todo)
[![Dependency Status](https://gemnasium.com/cncgl/laravel-todo.svg)](https://gemnasium.com/cncgl/laravel-todo)
[![Code Climate](https://codeclimate.com/github/cncgl/laravel-todo/badges/gpa.svg)](https://codeclimate.com/github/cncgl/laravel-todo)
[![Test Coverage](https://codeclimate.com/github/cncgl/laravel-todo/badges/coverage.svg)](https://codeclimate.com/github/cncgl/laravel-todo/coverage)
[![Issue Count](https://codeclimate.com/github/cncgl/laravel-todo/badges/issue_count.svg)](https://codeclimate.com/github/cncgl/laravel-todo)

Todo Application for Laravel 5

## Install
```
$ php composer.phar install
$ cp .env.example .env
$ php artisan key:generate
```

## Prepare Database
Create DB `laravel_sample` on MySQL
Create User root/root ( or change ``.env`` )
```
$ php artisan migrate
```
## Run Service
```
$ php artisan serve
```
visit
http://localhost:8000

## API
index
```
$ curl http://localhost:8000/api/todos
```
show
```
$ curl http://localhost:8000/api/todos/:id
```
store
```
$ curl http://localhost:8000/api/todos -H "Content-type: application/json" \
 -X POST -d '{"status":0, "title":"Shopping"}'
```
update
```
$ curl http://localhost:8000/api/todos/:id -H "Content-type: application/json" \
 -X PUT -d '{"status":1, "title":"Meeting"}'
```
destroy
```
$ curl http://localhost:8000/api/todos/:id -X DELETE
```
return 204 STATUS and empty body

## Test
```
$ vendor/bin/phpunit
```

## License
[MIT](LICENSE)
