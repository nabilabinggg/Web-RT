<?php

namespace App\Controllers;

// use App\Filters\CheckRewe;

class rewe extends BaseController
{

    public function indexrw()
    {
        $data = [
            'title' => 'Halaman Rw'
        ];
        // if (session()->get('logged_in')) {
        //     return redirect()->to('/rewe');
        // }
        return view('admin/rewe');
    }
}