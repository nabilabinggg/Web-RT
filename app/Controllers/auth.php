<?php

namespace App\Controllers;

use App\Models\AuthModels;

class Auth extends BaseController
{
    protected $authmodel;
    public function __construct()
    {
        $this->authmodel = new AuthModels();
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}