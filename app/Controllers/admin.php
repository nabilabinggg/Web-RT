<?php

namespace App\Controllers;

use App\Models\AdminModels;
use App\Models\auth_Models;

class admin extends BaseController
{
    protected $adminmodels;
    protected $auth_model;

    public function __construct()
    {
        $this->adminmodels = new AdminModels();
        $this->auth_model = new auth_Models();
    }
    public function index()
    {
        return view('admin/index');
    }

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

    public function delete_data()
    {
        $table = $this->request->getVar('table');
        $condition = [
            'id' => $this->request->getVar('id')
        ];
        $this->adminmodels->delete_data($table, $condition);
    }

    public function data_kk()
    {
        $this->adminmodels->save($this->request->getVar());
        return redirect()->to('/admin');
    }
    public function tambah_data_kk()
    {
        $data = ['data' => $this->adminmodels->getdata('rt', array())];
        return view('admin/t_data_kk', $data);
    }

    public function update_kk()
    {
        $this->adminmodels->where('id', $this->request->getVar('id'))->set($this->request->getVar())->update();
    }
    public function delete_kk()
    {
        $this->adminmodels->where('id', $this->request->getVar('id'))->delete();
    }

    public function buat_akun()
    {
        return view('admin/t_akun');
    }

    public function t_akun()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role_id' => $this->request->getVar('role_id'),
            'status' => $this->request->getVar('status'),
        ];
        $user = $this->auth_model->where('username', $data['username'])->findAll();
        if (!$user) {
            $this->auth_model->save($data, true);
            return redirect()->to('/admin');
        }
        session()->setFlashdata('MssgWo', "Username telah terdaftar");
        return redirect()->to('/admin');
    }
}