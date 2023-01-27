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

    public function logon()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->auth_model->where(['username' => $username])->first();
        if ($user) {
            if ($password == $user['password']) {
                $ses_user = [
                    'username' => $user['username'],
                    'role' => $user['role_id']

                ];
                if ($ses_user == 1) {

                    session()->set($ses_user);
                    return redirect()->to('superadmin/index');
                }
                // JIKA PASSWORD BENAR
                session()->set($ses_user);
                return redirect()->to('/index');
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
    public function login()
    {
        return view('auth/login');
        return redirect()->to('/index');
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
            'role_id' => 1,
            'status' => 1,
        ];
        $user = $this->auth_model->where('username', $data['username'])->findAll();
        if (!$user) {
            $this->auth_model->save($data, true);
            return redirect()->to('/index');
        }
        session()->setFlashdata('MssgWo', "Username telah terdaftar");
        return redirect()->to('/index');
    }


    public function homepage()
    {
        return view('Pages/homepage');
    }

    public function logoout()
    {
        return redirect()->to('/');
    }
}