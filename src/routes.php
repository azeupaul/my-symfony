<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;

function render_template($request)
{
    extract($request->attributes->all(), EXTR_SKIP);
    ob_start();
    include sprintf(__DIR__.'/../src/pages/%s.php', $_route);

    return new Response(ob_get_clean());
}

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
