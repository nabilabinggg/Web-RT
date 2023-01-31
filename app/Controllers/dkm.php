<?php

namespace App\Controllers;

// use App\Models\auth_Models;

class dkm extends BaseController
{
    public function dkm()
    {
        $data = [
            'title' => 'Halaman dkm'
        ];
        return view('admin/dkm');
    }
}