<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'RT'
        ];
        return view('pages/homepage', $data);
    }
}
