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
            //beri pesan
            session()->setFlashdata('pesan', 'anda belum login');
            // maka redirct ke halaman login
            return redirect()->to('/login');
        }
        if (session()->get('role_id' == 2)) {
            //jika login sebgai role 2 maka return ke halaman rete
            return redirect()->to('/rete');
        } elseif (session()->get('role_id' == 3)) {
            return redirect()->to('/rewe');
        } elseif (session()->get('role_id' == 4)) { //jika login sebagai role = 3 maka return redirect ke halaman rewe
            return redirect()->to('/dkm');
        } else {
            return redirect()->to('/admin');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {


        //jika sudah login maka diarahkan ke halaman admin

    }
}