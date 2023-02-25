<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;

class HelloController
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