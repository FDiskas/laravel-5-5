<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';

    public function map()
    {
        if (isset($_REQUEST['routes_files'])) {
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group($_REQUEST['routes_files']);
        }
    }
}
