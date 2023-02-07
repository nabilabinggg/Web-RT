<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModels extends Model
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

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function auth_usermod($table, $data)
    {
        $db         = \Config\Database::connect();
        $builder    = $db->table($table);
        $builder->insert($data);
    }
}