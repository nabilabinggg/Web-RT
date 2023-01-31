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
        if (!session()->get('role')) {
            // maka redirct ke halaman login
            return redirect()->to('/login');
        }
    }


    //     //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //buat cek login berdasarkan role
        if (session()->get('role')) {
            if (session()->get('role') == 1) {
                return redirect()->to('/admin');
            } elseif (session()->get('role') == 2) {
                return redirect()->to('/rete');
            } else {
                return redirect()->to('/dkm');
            }
        }



        //jika sudah login maka diarahkan ke halaman admin

    }
}