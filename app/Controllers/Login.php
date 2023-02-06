<?php

namespace App\Controllers;

use App\Models\AuthModels;

class Login extends BaseController
{
    protected $authmodel;

    public function __construct()
    {
        $this->authmodel = new AuthModels();
    }

    public function index()
    {

        $data = [
            'title' => 'Login'
        ];
        return view('pages/login', $data);
    }


    public function logon()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $this->authmodel->where(['username' => $username])->first();
        if ($user) {
            if (password_verify($password, $user['password']) && $user['username']  == $username) {
                $ses_user = [
                    'username' => $user['username'],
                    'role' => $user['role_id'],
                    'logged_in' => TRUE
                ];
                // Jika password Benar
                session()->set($ses_user);
                if ($ses_user['role'] == 1) {
                    return redirect()->to('/admin');
                } elseif ($ses_user['role'] == 2) {
                    return redirect()->to('/rete');
                } elseif ($ses_user['role'] == 3) {
                    return redirect()->to('/rewe');
                } elseif ($ses_user['role'] == 4) {
                    return redirect()->to('/dkm');
                }
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