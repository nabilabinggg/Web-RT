<?php

namespace App\Filters;


use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class checkRole implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //buat cek login
        if (!session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('/login');
        } else {
            // if (session()->get('role') == 1) {
            //     return redirect()->to('/admin');
            // } elseif (session()->get('role') == 2) {
            //     return redirect()->to('/rt');
            // } else {
            //     return redirect()->to('/dkm');
            // }
        }
    }


    //     //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('role') == 1) {
            return redirect()->to('/admin');
        } else {
            dd("bukan admin shay");
        }


        //jika sudah login maka diarahkan ke halaman admin

    }
}