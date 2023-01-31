<?php

namespace App\Controllers;

use App\Models\AdminModels;

class kk extends BaseController
{
    protected $adminmodels;

    public function __construct()
    {
        $this->adminmodels = new AdminModels();
    }

    public function data_kk()
    {
        $this->adminmodels->save($this->request->getVar());
        return redirect()->to('/admin');
    }
    public function tambah_data_kk()
    {
        return view('admin/t_data_kk');
    }

    public function update_kk()
    {
        $this->adminmodels->where('id', $this->request->getVar('id'))->set($this->request->getVar())->update();
    }
    public function delete_kk()
    {
        $this->adminmodels->where('id', $this->request->getVar('id'))->delete();
    }
}