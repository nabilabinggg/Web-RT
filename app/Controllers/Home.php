<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index_()
    {
        $data = [
            'title' => 'RT'
        ];
        return view('pages/homepage', $data);
    }
}