<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function index(String $name)
    {
        $clearName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $response = "<h1>Hello $clearName</h1>";

        return new Response($response);
    }

    public function bye()
    {
        return new Response('<h1>GoodBye</h1>');
    }
}