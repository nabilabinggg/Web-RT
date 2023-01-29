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
        if (session('logged_in')) {
            return redirect()->to('/admin');
        }
        return view('pages/login', $data);
    }
    public function rete()
    {
        $data = [
            'title' => 'Halaman Rt'
        ];
        return view('admin/rete');
    }
    public function rewe()
    {
        $data = [
            'title' => 'Halaman Rw'
        ];
        return view('admin/rewe');
    }
    public function dkm()
    {
        $data = [
            'title' => 'Halaman dkm'
        ];
        return view('admin/dkm');
    }

    private function Login()
    {
        if (session('username')) {
            return redirect()->to('/admin');
        } elseif (session('role' == 2)) {
            return redirect()->to('/rete');
        } elseif (session('role' == 3)) {
            return redirect()->to('rewe');
        }
    }
}