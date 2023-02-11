<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$name = $request->query->get('name', 'World');

$response = new Response();
$response->headers->set('Content-Type', 'text/html; charset=utf-8');
$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES)));

$response->send();