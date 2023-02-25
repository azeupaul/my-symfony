<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class Hello
{
    public function index(Request $request)
    {
        return render_template($request);
    }

    public function bye(Request $request)
    {
        return render_template($request);
    }
}

class About
{
    public function index(Request $request)
    {
        return render_template($request);
    }
}

$routes = new RouteCollection;
$routes->add('hello', new Route('/hello/{name}', [
    'name' => 'World',
    '_controller' => 'Hello::index'
]));

$routes->add('bye', new Route('/bye', [
    '_controller' => 'Hello::bye'
]));

$routes->add('about', new Route('/about', [
    '_controller' => 'About::index'
]));

return $routes;
