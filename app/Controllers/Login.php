<?php

namespace App\Controllers;

use App\Models\auth_Models;

class Login extends BaseController
{
    protected $auth_model;

    public function __construct()
    {
        $this->auth_model = new auth_Models();
    }

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('pages/login', $data);
    }
}