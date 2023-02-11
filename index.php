<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__ . '/vendor/autoload.php';

$request = Request::createFromGlobals();

$response = new Response();

$map = [
    '/' => 'home.php',
    '/bye' => 'bye.php',
];

// Get the current URI
$pathInfo = $request->getPathInfo();

include __DIR__ . '/src/pages/' . $map[$pathInfo];

$response->send();
