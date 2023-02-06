<?php

namespace App\Controllers;

// use App\Filters\CheckRewe;

class Rewe extends BaseController
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