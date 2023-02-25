<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;

class AboutController
{
    public function index()
    {
        return new Response('<h1>About us</h1>');
    }
}