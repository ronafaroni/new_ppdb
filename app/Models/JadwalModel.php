<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    public function get_status()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_pendaftaran')->where(array('no_id' => $nisn))->get()->getResultArray();
    }

    public function get_pendaftaran()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_pendaftaran')->where(array('no_id' => $nisn))->get()->getResultArray();
    }

    public function get_jadwal()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_jadwal')->where(array('no_id' => $nisn))->get()->getResultArray();
    }

    public function jadwal()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_jadwal')->where(array('no_id' => $nisn))->get()->getResultArray();
    }

    public function hasil()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_hasil')->where(array('no_id' => $nisn))->get()->getResultArray();
    }

    public function import_excel()
    {
        return $this->db->table('tb_jadwal')->get()->getResultArray();
    }

    public function get_hasil()
    {
        return $this->db->table('tb_hasil')->get()->getResultArray();
    }

    public function cek_data($no_pendaftaran)
    {
        return $this->db->table('tb_jadwal')
            ->where(array('no_pendaftaran' => $no_pendaftaran))
            ->get()->getRowArray();
    }

    public function cek_data2($no_pendaftaran)
    {
        return $this->db->table('tb_hasil')
            ->where(array('no_pendaftaran' => $no_pendaftaran))
            ->get()->getRowArray();
    }

    public function import($data)
    {
        return $this->db->table('tb_jadwal')->insert($data);
    }

    public function importHasil($data)
    {
        return $this->db->table('tb_hasil')->insert($data);
    }
}
