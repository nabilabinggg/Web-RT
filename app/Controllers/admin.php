<?php

namespace App\Controllers;

use App\Models\AdminModels;
use App\Models\AuthModels;

class Admin extends BaseController
{
    protected $adminmodels;
    protected $authmodel;

    public function __construct()
    {
        $this->adminmodels = new AdminModels();
        $this->authmodel = new AuthModels();
    }
    public function index()
    {
        $data_warga = $this->adminmodels->getdata('data_warga');
        $kk = $this->adminmodels->getdata('kk');
        $data = [
            'data_warga' => $data_warga,
            'kk' => $kk
        ];
        return view('admin/index', $data);
    }

    public function tambah_data_penduduk()
    {
        $data = ['data' => $this->adminmodels->getdata('kk', array())];
        return view('admin/t_data_penduduk', $data);
    }
    public function update_data_dokumen()
    {
        $uri = new \CodeIgniter\HTTP\URI(current_url());
        $id = $uri->getSegment(3);
        $data = ['data' => $this->adminmodels->getdata('kk'), 'warga' => $this->adminmodels->getdata('data_warga', ['id' => $id])];
        return view('admin/update_dokumen', $data);
    }
    public function tambah_data_rt()
    {
        $data = ['data' => $this->adminmodels->getdata('kk', array())];
        return view('admin/t_data_rt', $data);
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
        return redirect()->to('/admin',);
    }
    public function update_data_warga()
    {
        $this->adminmodels->data_wargamod('update_data_warga', $this->request->getVar());
        return redirect()->to('/admin',);
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
        $validation = \Config\Services::validation();
        $rt = $this->adminmodels->getdata('rt', array());
        $rw = $this->adminmodels->getdata('rw', array());
        $kelurahan = $this->adminmodels->getdata('kelurahan', array());
        $kecamatan = $this->adminmodels->getdata('kecamatan', array());
        $provinsi = $this->adminmodels->getdata('provinsi', array());
        $foto = $this->request->getFile('foto', array());
        $data = [
            'validation' => $validation,
            'kecamatan' => $kecamatan,
            'provinsi' => $provinsi,
            'kelurahan' => $kelurahan,
            'rw' => $rw,
            'rt' => $rt,
            'foto' => $foto
        ];

        //validation
        if (!$this->validate([
            'nomor_kk' => [
                'rules' => 'required|is_unique[nomor_kk]',
                'errors' => [
                    'required' => '{field} kolom harus di isi',
                    'is_unique' => '{field} kk sudah terdaftar'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar harus di isi',
                    'max_size' => 'Ukuran Gambar terlalu besar (maks. 1MB)',
                    'is_image' => 'upload file bukan gambar',
                    'mime_in' => ' file harus jpg,jpeg, png',
                ]
            ],
        ]))
            return view('admin/t_data_kk', $data);
    }
    public function update_kk()
    {
        $this->adminmodels->where('id', $this->request->getVar('id'))->set($this->request->getVar())->update();
        // $data = ['data' => $this->adminmodels->getdata('kk'), 'warga' => $this->adminmodels->getdata('data_warga', ['id' => $id])];
        $uri = new \CodeIgniter\HTTP\URI(current_url());
        $id = $uri->getSegment(1);
        $rt = $this->adminmodels->getdata('rt', array());
        $rw = $this->adminmodels->getdata('rw', array());
        $kelurahan = $this->adminmodels->getdata('kelurahan', array());
        $kecamatan = $this->adminmodels->getdata('kecamatan', array());
        $provinsi = $this->adminmodels->getdata('provinsi', array());
        $data = [
            'kecamatan' => $kecamatan,
            'provinsi' => $provinsi,
            'kelurahan' => $kelurahan,
            'rw' => $rw,
            'rt' => $rt,
            'id' => $id,

        ]; {
            return view('admin/update_kk', $data);
        }

        //ambil gambar
        $foto = $this->request->getFile('foto');
        $foto->move('img', $foto);
    }
    public function delete_kk($id)
    {
        $this->adminmodels->delete($id);
        session()->setFlashdata('pesan', 'kk berhasil dihapus');
        return redirect()->to('/admin');
        // $this->request->getVar($id)->delete();
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
        $user = $this->authmodel->where('username', $data['username'])->findAll();
        if (!$user) {
            $this->authmodel->save($data, true);
            return redirect()->to('/admin');
        }
        session()->setFlashdata('MssgWo', "Username telah terdaftar");
        return redirect()->to('/admin');
    }
    public function detail()
    {
        $kk = $this->adminmodels->getdata('kk');
        $data = ['kk' => $kk];
        return view('admin/detail', $data);
    }
}
