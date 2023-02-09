<?php

namespace App\Controllers;

use App\Models\AuthModels;
use App\Models\AdminModels;

class Auth extends BaseController
{
    protected $authmodel;
    protected $adminmodels;


    public function __construct()
    {
        $this->authmodel = new AuthModels();
        $this->adminmodels = new AdminModels();
    }



    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
