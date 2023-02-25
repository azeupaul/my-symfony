<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;

class AboutController
{
    public function index(Request $request)
    {
        return render_template($request);
    }
}