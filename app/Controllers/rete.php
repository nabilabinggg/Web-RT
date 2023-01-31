<?php

namespace App\Controllers;

class rete extends BaseController
{
    public function indexrt()
    {
        $data = [
            'title' => 'Halaman RT'
        ];
        if (session()->get('logged_in')) {
            return redirect()->to('/rete');
        }
        return view('admin/rete');
    }
}