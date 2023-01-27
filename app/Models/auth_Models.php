<?php

namespace App\Models;

use CodeIgniter\Model;

class auth_Models extends Model
{
    protected $table      = 'user';

    protected $useAutoIncrement = true;

    protected $allowedFields =
    [
        'username',
        'password',
        'role_id',
        'status'

    ];
    //akan mengambil data dari kolom username pada table user
    // public function getData($parameter)
    // {
    //     $builder = $this->table($this->table);
    //     $builder->where('username', $parameter);
    //     $query = $builder->get();
    //     return $query->getRowArray;
    // }

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}