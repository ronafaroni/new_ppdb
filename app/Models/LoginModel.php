<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

    public function cek_login($username, $password)
    {
        return $this->db->table('tb_users')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }

    public function insert_data($data)
    {
        return $this->db->table('tb_users')->insert($data);
    }
}
