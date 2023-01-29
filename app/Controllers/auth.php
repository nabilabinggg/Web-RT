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

    public function logon()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->auth_model->where(['username' => $username])->first();
        if ($user) {
            if (password_verify($password, $user['password']) && $user['username']  == $username) {
                $ses_user = [
                    'username' => $user['username'],
                    'role' => $user['role_id'],
                    'logged_in' => TRUE
                ];
                //HEAD
                if ($ses_user['role'] == 1) {

                    session()->set($ses_user);
                    return redirect()->to('/admin');
                }
                // JIKA PASSWORD BENAR
                session()->set($ses_user);
                return redirect()->to('/admin');
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
        return redirect()->to('/admin');
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

    public function regis()
    {
        return view('admin/register');
    }

    public function homepage()
    {
        return view('Pages/homepage');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}