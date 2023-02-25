<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection;
$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'World',
    '_controller' => function ($request) {
        return render_template($request);
    }
]));

$routes->add('bye', new Route('/bye', [
    '_controller' => function ($request) {
        return render_template($request);
    }
]));

$routes->add('about', new Route('/about', [
    '_controller' => function ($request) {
        return render_template($request);
    }
]));

return $routes;
