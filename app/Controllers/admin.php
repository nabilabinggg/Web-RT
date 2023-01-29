<?php

namespace App\Controllers;

use App\Models\AdminModels;

class admin extends BaseController
{
    protected $adminmodels;

    public function __construct()
    {
        $this->adminmodels = new AdminModels();
    }
    public function index()
    {
        return view('admin/index');
    }
    // public function tambah_akun()
    // {
    //     return view('admin/t_akun');
    // }
    public function tambah_data_penduduk()
    {
        return view('admin/t_data_penduduk');
    }
    public function tambah_data_rt()
    {
        return view('admin/t_data_rt');
    }
    public function tambah_data_rw()
    {
        return view('admin/t_data_rw');
    }
    public function tambah_data_kecamatan()
    {
        return view('admin/t_data_kecamatan');
    }
    public function tambah_data_kelurahan()
    {
        return view('admin/t_data_kelurahan');
    }
    public function tambah_data_provinsi()
    {
        return view('admin/t_data_provinsi');
    }
    public function tambah_data_kk()
    {
        return view('admin/t_data_kk');
    }
    public function provinsi()
    {
        $this->adminmodels->data_wargamod('provinsi', $this->request->getVar());
        return redirect()->to('/admin');
    }
    public function kecamatan()
    {
        $this->adminmodels->data_wargamod('kecamatan', $this->request->getVar());
        return redirect()->to('/admin');
    }
    public function kelurahan()
    {
        $this->adminmodels->data_wargamod('kelurahan', $this->request->getVar());
        return redirect()->to('/admin');
    }
    public function rt()
    {
        $this->adminmodels->data_wargamod('rt', $this->request->getVar());
        return redirect()->to('/admin');
    }
    public function rw()
    {
        $this->adminmodels->data_wargamod('rw', $this->request->getVar());
        return redirect()->to('/admin');
    }
    public function data_kk()
    {
        $this->adminmodels->save($this->request->getVar());
        return redirect()->to('/admin');
    }
    public function maping()
    {
        $this->adminmodels->mapingmod('maping', $this->request->getVar());
    }
    public function data_warga()
    {
        $this->adminmodels->data_wargamod('data_warga', $this->request->getVar());

        return redirect()->to('/');
    }
    public function home()
    {

        $data_warga = $this->adminmodels->getdata('data_warga', '');
        $provinsi = $this->adminmodels->getdata('provinsi', '');
        $kecamatan = $this->adminmodels->getdata('kecamatan', '');
        $kelurahan = $this->adminmodels->getdata('kelurahan', '');
        $rw = $this->adminmodels->getdata('rw', '');
        $rt = $this->adminmodels->getdata('rt', '');
        $maping = $this->adminmodels->getdata('maping', '');
        $user = $this->adminmodels->getdata('user', '');
        $kk = $this->adminmodels->findAll();
        $data = [
            'data_warga' => $data_warga,
            'provinsi' => $provinsi,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'rw' => $rw,
            'rt' => $rt,
            'user' => $user,
            'maping' => $maping,
            'kk' => $kk,
        ];
    }
    public function update_data()
    {
        $table = $this->request->getVar('table');
        $condition = [
            'id' => $this->request->getVar('id')
        ];
        $this->adminmodels->update_data($table, $condition, $this->request->getVar());
    }
    public function update_kk()
    {
        $this->adminmodels->where('id', $this->request->getVar('id'))->set($this->request->getVar())->update();
    }
    public function delete_data()
    {
        $table = $this->request->getVar('table');
        $condition = [
            'id' => $this->request->getVar('id')
        ];
        $this->adminmodels->delete_data($table, $condition);
    }

    public function delete_kk()
    {
        $this->adminmodels->where('id', $this->request->getVar('id'))->delete();
    }
}