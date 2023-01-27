<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'superadmin',
            'password' => password_hash('123451', PASSWORD_DEFAULT),
            'role_id' => '1'
        ];
        $this->db->table('user')->insert($data);
    }
}