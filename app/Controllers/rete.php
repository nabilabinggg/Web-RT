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
        // if (!session()->get('logged_in')) {
        //     return redirect()->to('/login');
        // } else {
        //     if (session()->get('role' == 2)) {
        //         return view('admin/rete');
        //     } else {
        //         dd("bukan rt");
        //     }
        // }
    }
    public function tambah_data_warga(){
        return view('admin/tambah');
    }
}