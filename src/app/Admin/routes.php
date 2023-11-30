<?php

use App\Admin\Controllers\UserController;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route as FacadesRoute;
use OpenAdmin\Admin\Facades\Admin;

Admin::routes();

FacadesRoute::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('demo/users', UserController::class);

});
