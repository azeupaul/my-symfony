<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/vendor/autoload.php';

$request = Request::createFromGlobals();

$map = [
    '/' => 'home.php',
    '/bye' => 'bye.php',
];

// Get the current URI
$pathInfo = $request->getPathInfo();

include __DIR__ . '/src/pages/' . $map[$pathInfo];
