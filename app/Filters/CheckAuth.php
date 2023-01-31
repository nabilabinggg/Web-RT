<?php

namespace App\Filters;


use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class CheckAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        // jika user belum login
        if (!session()->get('logged_in')) {
            //maka redirect ke halaman login
            return redirect()->to('/login');
            // }
            // if (session()->get('logged_in')) {
            //     return redirect()->to('/admin');
        }
    }


    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // if (session()->get('logged_in')) {
        //     if (session()->get('role') == 1) {
        //         return redirect()->to('/admin');
        //     } elseif (session()->get('role') == 2) {
        //         return redirect()->to('/rete');
        //     // elseif (session()->get('role') == 2) {
        //     //     return redirect()->to('/rete');
        //     // }
        //     }
        // }
    }
}