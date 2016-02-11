# laravel-todo
Todo Application for Laravel 5

## Install
```
$ php composer.phar install
```

## Prepare Database
Create DB `laravel_sample` on MySQL
Create User root/root ( or change ``app/config/database.php`` )
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

## Test
```
$ vendor/bin/phpunit
```

## License
[MIT](LICENSE)
