<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\CompiledUrlMatcher;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\Dumper\CompiledUrlMatcherDumper;

require __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();

$routes = require(__DIR__ . '/../src/routes.php');

$context = new RequestContext;
$context->fromRequest($request);

$compiledRoutes = (new CompiledUrlMatcherDumper($routes))->getCompiledRoutes();

$matcher = new CompiledUrlMatcher($compiledRoutes, $context);

function render_template($request)
{
    extract($request->attributes->all(), EXTR_SKIP);
    ob_start();
    include sprintf(__DIR__.'/../src/pages/%s.php', $_route);

    return new Response(ob_get_clean());
}

try {
    $request->attributes->add($matcher->match($request->getPathInfo()));
    $response = call_user_func('render_template', $request);
} catch (ResourceNotFoundException $e) {
    $response = new Response("<h1>Page not found</h1>", 404);
} catch (Exception $exception) {
    $response = new Response("<h1>An error occured</h1>", 500);
}

$response->send();
