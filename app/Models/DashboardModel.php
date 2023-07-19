<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
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

    public function get_ortu()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_orangtua')->where(array('no_id' => $nisn))->get()->getResultArray();
    }

    public function get_periodik()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_periodik')->where(array('no_id' => $nisn))->get()->getResultArray();
    }

    public function get_berkas()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_berkas')->where(array('no_id' => $nisn))->get()->getResultArray();
    }

    public function get_konfirmasi()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_berkas')
            ->where(array('tb_pendaftaran.no_id' => $nisn))
            ->where(array('tb_berkas.no_id' => $nisn))
            ->join('tb_pendaftaran', 'tb_berkas.no_id = tb_pendaftaran.no_id', 'LEFT')
            ->get()->getResultArray();
    }
}
