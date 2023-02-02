<?php

namespace App\Controllers;

use App\Models\auth_Models;

class auth extends BaseController
{
    protected $auth_model;
    public function __construct()
    {
        $this->auth_model = new auth_Models();
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}