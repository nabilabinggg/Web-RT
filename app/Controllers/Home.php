<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index_()
    {
        return view('pages/homepage');
    }
}