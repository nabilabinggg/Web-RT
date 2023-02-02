<?php

namespace App\Controllers;

class rete extends BaseController
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