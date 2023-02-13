<?php

namespace App\Controllers;

use App\Models\AdminModels;
use App\Models\AuthModels;
use App\Models\Wargamodels;
use PhpParser\Node\Stmt\Echo_;

class Admin extends BaseController
{
    protected $adminmodels;
    protected $authmodel;
    protected $wargamodel;

    public function __construct()
    {
        $this->adminmodels = new AdminModels();
        $this->authmodel = new AuthModels();
        $this->wargamodel = new Wargamodels();
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
    public function update_data_warga()
    {
        // $this->adminmodels->where->update_data('data_warga'['id_kk'], $this->request->getVar());
        $this->wargamodel->where('id_kk', $this->request->getVar('id_kk'))->set($this->request->getVar())->update();
        return redirect()->to('/admin',);
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
        if (!$this->validate([
            'nomor_kk' => [
                'rules' => 'required|is_unique[kk.nomor_kk]',
                // 'errors' => [
                //     'required' => '{field} kolom harus di isi',
                //     'is_unique' => '{field} kk sudah terdaftar'
                // ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/tambah_data_kk')->withInput()->with('validation', $validation);
        }
        $this->adminmodels->save([
            'nomor_kk' => $this->request->getVar('nomor_kk'),
            'kepala_keluarga' => $this->request->getVar('kepala_keluarga'),
            'alamat' => $this->request->getVar('alamat'),
            'id_kecamatan' => $this->request->getVar('id_kecamatan'),
            'id_kelurahan' => $this->request->getVar('id_kelurahan'),
            'id_rw' => $this->request->getVar('id_rw'),
            'id_rt' => $this->request->getVar('id_rt'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'id_provinsi' => $this->request->getVar('id_provinsi'),
            'foto_kk' => $this->request->getFile('foto_kk')
        ]);
        return redirect()->to('/admin');
    }

    public function tambah_data_kk()
    {
        $rt = $this->adminmodels->getdata('rt', array());
        $rw = $this->adminmodels->getdata('rw', array());
        $kelurahan = $this->adminmodels->getdata('kelurahan', array());
        $kecamatan = $this->adminmodels->getdata('kecamatan', array());
        $provinsi = $this->adminmodels->getdata('provinsi', array());
        $kk = $this->adminmodels->getdata('kk', array());
        $data = [
            'validation' =>  \Config\Services::validation(),
            'kecamatan' => $kecamatan,
            'provinsi' => $provinsi,
            'kelurahan' => $kelurahan,
            'rw' => $rw,
            'rt' => $rt,
            'kk' => $kk,

        ];
        return view('admin/t_data_kk', $data);
    }
    public function update_kk()
    {
        // $this->adminmodels->where('id', $this->request->getVar('id'))->set($this->request->getVar())->update();
        // $data = ['data' => $this->adminmodels->getdata('kk'), 'warga' => $this->adminmodels->getdata('data_warga', ['id' => $id])];
        $uri = new \CodeIgniter\HTTP\URI(current_url());
        $id = $uri->getSegment(3);
        $rt = $this->adminmodels->getdata('rt', array());
        $rw = $this->adminmodels->getdata('rw', array());
        $kelurahan = $this->adminmodels->getdata('kelurahan', array());
        $kecamatan = $this->adminmodels->getdata('kecamatan', array());
        $provinsi = $this->adminmodels->getdata('provinsi', array());
        $kk = $this->adminmodels->getdata('kk', array('id' => $id));
        $data = [
            'kecamatan' => $kecamatan,
            'provinsi' => $provinsi,
            'kelurahan' => $kelurahan,
            'rw' => $rw,
            'rt' => $rt,
            'kk' => $kk

        ]; {
            return view('admin/update_kk', $data);
        }

        //ambil gambar
        $foto = $this->request->getFile('foto');
        $foto->move('img', $foto);
    }
    public function update_data_kk()
    {
        $this->adminmodels->where('nomor_kk', $this->request->getVar('nomor_kk'))->set($this->request->getVar())->update();
        return redirect()->to('/admin');
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
