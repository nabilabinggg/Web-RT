<?php

namespace App\Models;

use CodeIgniter\Model;

class Wargamodels extends Model
{
    protected $table      = 'data_warga';

    protected $useAutoIncrement = true;

    protected $allowedFields =
    [
        'id_kk',
        'nama_lengkap',
        'NIK',
        'scan_ktp',
        'j_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'pendidikan',
        'jenis_pekerjaan',
        'satus_pernikahan',
        'status_hubungan_keluarga',
        'kewarganegaraan',
        'no_passport',
        'kitas_kitap',
        'ayah',
        'ibu',
        'status_warga',
        'keterangan'

    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function data_wargamod($table, $data)
    {
        $db         = \Config\Database::connect();
        $builder    = $db->table($table);
        $builder->insert($data);
    }
    public function addvaluearea($table, $data)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($table);
        $builder->insert($data);
    }
    public function getdata($table, $condition = [])
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($table);
        $builder->select('*');
        $builder->where($condition);
        $result = $builder->get()->getResultArray();
        return $result;
    }
    public function update_data($table, $condition, $value)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($table);
        $builder->set($value);
        $builder->where($condition);
        $builder->update();
    }
    public function delete_data($table, $condition)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($table);
        $builder->where($condition);
        $builder->delete();
    }
}
