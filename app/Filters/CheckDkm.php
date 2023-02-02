<?php

namespace App\Filters;


use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class CheckDkm implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->has('role') != true) {
            return redirect()->to('/login');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

        if (session()->get('role') == true) {
            if (session()->get('role') == 4) {
                return redirect()->to('/dkm');
            }
        }
    }
}