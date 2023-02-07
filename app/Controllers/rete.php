<?php

namespace App\Controllers;

class Rete extends BaseController
{
    public function indexrt()
    {
        $data = [
            'title' => 'Halaman RT'
        ];
        return view('admin/rete');
    }
    public function tambah_data_warga()
    {
        return view('admin/tambah');
    }
}