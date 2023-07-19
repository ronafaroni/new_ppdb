<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{

    public function get_users()
    {
        $role = 'users';
        return $this->db->table('tb_users')->where(array('role' => $role))->get()->getResultArray();
    }

    public function update_password($data, $id_users)
    {
        return $this->db->table('tb_users')->update($data, array('id_users' => $id_users));
    }

    public function get_status()
    {
        $nisn = session()->get('no_nisn');
        return $this->db->table('tb_pendaftaran')->where(array('no_nisn' => $nisn))->get()->getResultArray();
    }

    public function edit_password($id_users)
    {
        return $this->db->table('tb_users')->where('id_users', $id_users)->get()->getRowArray();
    }

    public function hapus_akun($id_users)
    {
        return $this->db->table('tb_users')->delete(['id_users' => $id_users]);
    }
}
