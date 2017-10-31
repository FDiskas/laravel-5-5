<p align="center">
  <img src="http://www.phpbenchmarks.com/images/logo_github.png">
  <br>
  <a href="http://www.phpbenchmarks.com" target="_blank">www.phpbenchmarks.com</a>
</p>

## What is www.phpbenchmarks.com ?

You will find lot of benchmarks for PHP frameworks, ORM and libs here.

You can compare results between Apache Bench and Siege, PHP 5.6 to 7.2 and versions of your favorites PHP code.

## What is this repository ?

It's benchmark source code for Laravel 5.5.

You will not find final source code here, as it's in [phpbenchmarks/laravel](https://github.com/phpbenchmarks/laravel) dependency.

See [changelog](changelog.md) to see optimisations.

You can find how we benchmark it [here](http://www.phpbenchmarks.com/en/benchmark-protocol).

## Laravel 5.5.0

Benchmark | Tool | PHP | Score
--------- | ---- | --- | -----
[Hello World](http://www.phpbenchmarks.com/en/benchmark/apache-bench/php-7.1/laravel-5.5.html#benchmark-hello-world) | Apache Bench | 7.1 | In progress
[News](http://www.phpbenchmarks.com/en/benchmark/apache-bench/php-7.1/laravel-5.5.html#benchmark-news) | Apache Bench | 7.1 | In progress
[Rest API](http://www.phpbenchmarks.com/en/benchmark/apache-bench/php-7.1/laravel-5.5.html#benchmark-rest) | Apache Bench | 7.1 | In progress

Scores are too low ? Do not hesitate to create a pull request, and ask a new benchmark !

## Installation

Create _config/database.php_ :
```php
<?php
return [
    'fetch' => PDO::FETCH_CLASS,
    'default' => env('DB_CONNECTION', 'mysql'),
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'DBNAME'),
            'username' => env('DB_USERNAME', 'USERNAME'),
            'password' => env('DB_PASSWORD', 'PASSWORD'),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => false,
        ],
    ],
    'migrations' => 'migrations'
];
```
