<?php

// as Router component is really slow, load only routes we need for each benchmark
$_REQUEST['routes_files'] = __DIR__ . '/../vendor/phpbenchmarks/laravel/Http/routes.rest.php';

require __DIR__ . '/../bootstrap/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
