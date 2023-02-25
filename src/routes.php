<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class Hello
{
    public function index($request)
    {
        return render_template($request);
    }

    public function bye($request)
    {
        return render_template($request);
    }
}

class About
{
    public function index($request)
    {
        return render_template($request);
    }
}

$routes = new RouteCollection;
$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'World',
    '_controller' => [new Hello(), 'index']
]));

$routes->add('bye', new Route('/bye', [
    '_controller' => [new Hello, 'bye']
]));

$routes->add('about', new Route('/about', [
    '_controller' => [new About, 'index']
]));

return $routes;
