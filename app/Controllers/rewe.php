<?php

namespace App\Controllers;

class rewe extends BaseController
{

    public function indexrw()
    {
        $data = [
            'title' => 'Halaman Rw'
        ];
        if (session()->get('logged_in')) {
            return redirect()->to('/rewe');
        }
        return view('admin/rewe');
    }
}