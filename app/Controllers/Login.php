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

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->auth_model->where(['username' => $username])->first();
        if ($user) {
            if ($password == $user['password']) {
                $ses_user = [
                    'username' => $user['username']
                ];
                if ($ses_user == 1) {

                    session()->set($ses_user);
                    return redirect()->to('/homepage');
                }
                // JIKA PASSWORD BENAR
                session()->set($ses_user);
                return redirect()->to('/homepage');
            } else {
                // Jika password Salah
                session()->setFlashdata('MssgWo', "Password Salah");
                return redirect()->to('/login');
            }
        } else {
            // Jika User tidak ada
            session()->setFlashdata('MssgWo', "Data Tidak Ditemukan");
            return redirect()->to('/login');
        }
    }
}