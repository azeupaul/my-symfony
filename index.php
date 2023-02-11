<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/vendor/autoload.php';

$request = Request::createFromGlobals();

// Get the current URI
$pathInfo = $request->getPathInfo();

if ($pathInfo === '/') {
    include(__DIR__ . '/src/pages/home.php');
} else {
    include(__DIR__ . '/src/pages/bye.php');
}
