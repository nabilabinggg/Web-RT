<?php

namespace App\Controllers;

use App\Models\AuthModels;

class Registrasi extends BaseController
{
    protected $authmodel;
    public function __construct()
    {
        $this->authmodel = new AuthModels();
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
        $user = $this->authmodel->where('username', $data['username'])->findAll();
        if (!$user) {
            $this->authmodel->save($data, true);
            return redirect()->to('/login');
        }
        session()->setFlashdata('MssgWo', "Username telah terdaftar");
        return redirect()->to('/login');
    }
}