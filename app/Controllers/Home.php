<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index_()
    {
<<<<<<<<< Temporary merge branch 1
        $data = [
            'title' => 'RT'
        ];
        return view('pages/homepage', $data);
=========
        return view('welcome_message');
>>>>>>>>> Temporary merge branch 2
    }
}