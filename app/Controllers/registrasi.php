<?php

namespace App\Controllers;

use App\Models\auth_Models;

class registrasi extends BaseController
{
    protected $auth_model;
    public function __construct()
    {
        $this->auth_model = new auth_Models();
    }
    public function regis()
    {
        return view('admin/register');
    }

    public function register()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role_id' => 1,
            'status' => 1,
        ];
        $user = $this->auth_model->where('username', $data['username'])->findAll();
        if (!$user) {
            $this->auth_model->save($data, true);
            return redirect()->to('/login');
        }
        session()->setFlashdata('MssgWo', "Username telah terdaftar");
        return redirect()->to('/login');
    }
}