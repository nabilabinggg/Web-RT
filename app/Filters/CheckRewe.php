<?php

namespace App\Filters;


use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class CheckRewe implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //buat cek login
        if (!session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('/login');
        }
    }


    //     //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('role') == 3) {
            return redirect()->to('/rewe');
        }
        //  {
        // return redirect()->to('/dkm');
        // }
        //buat cek login berdasarkan role
        // if (session()->get('logged_in')) {
        // }



        //         //jika sudah login maka diarahkan ke halaman admin

    }
}