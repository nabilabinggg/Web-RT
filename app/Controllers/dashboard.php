<?php

namespace App\Controllers;

class dashboard extends BaseController
{
    public function index()
    {
        return view('pages/dashboard');
    }
}
