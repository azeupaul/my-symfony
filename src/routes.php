<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection;

$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'World',
    '_controller' => 'App\Controllers\HelloController::index'
]));

$routes->add('bye', new Route('/bye', [
    '_controller' => 'App\Controllers\HelloController::bye'
]));

$routes->add('about', new Route('/about', [
    '_controller' => 'App\Controllers\AboutController::index'
]));

return $routes;
