<?php

namespace App\Controllers;

use App\Models\auth_Models;

use App\Filters\CheckAuth;

class auth extends BaseController
{
    protected $auth_model;
    public function __construct()
    {
        $this->auth_model = new auth_Models();
    }

    public function buat_akun()
    {
        return view('admin/t_akun');
    }

    public function t_akun()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role_id' => $this->request->getVar('role_id'),
            'status' => $this->request->getVar('status'),
        ];
        $user = $this->auth_model->where('username', $data['username'])->findAll();
        if (!$user) {
            $this->auth_model->save($data, true);
            return redirect()->to('/admin');
        }
        session()->setFlashdata('MssgWo', "Username telah terdaftar");
        return redirect()->to('/admin');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}