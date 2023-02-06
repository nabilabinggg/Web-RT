<?php

namespace App\Controllers;

class Dkm extends BaseController
{
    public function dkm()
    {
        $data = [
            'title' => 'Halaman dkm'
        ];
        return view('admin/dkm');
    }
}