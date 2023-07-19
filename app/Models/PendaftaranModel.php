<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
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

    public function insert_data($data)
    {
        return $this->db->table('tb_pendaftaran')->insert($data);
    }

    public function insert_data_wali($data)
    {
        return $this->db->table('tb_orangtua')->insert($data);
    }

    public function insert_data_periodik($data)
    {
        return $this->db->table('tb_periodik')->insert($data);
    }

    public function insert_berkas($data)
    {
        return $this->db->table('tb_berkas')->insert($data);
    }

    public function download($id_berkas)
    {
        return $this->db->table('tb_berkas')->where('id_berkas', $id_berkas)->get()->getRowArray();
    }

    public function get_status()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_pendaftaran')->where(array('no_id' => $nisn))->get()->getResultArray();
    }

    public function carikode()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_pendaftaran')->where(array('no_id' => $nisn))->get()->getRowArray();
    }

    public function get_data_pendaftaran()
    {
        return $this->db->table('tb_pendaftaran')
            ->groupBy('tb_pendaftaran.id_pendaftaran')
            ->join('tb_berkas', 'tb_berkas.no_id = tb_pendaftaran.no_id')
            ->get()->getResultArray();
    }

    public function get_detail_pendaftaran()
    {
        return $this->db->table('tb_pendaftaran')
            ->join('tb_orangtua', 'tb_orangtua.no_id = tb_pendaftaran.no_id', 'LEFT')
            ->join('tb_periodik', 'tb_periodik.no_id = tb_pendaftaran.no_id', 'LEFT')
            ->join('tb_berkas', 'tb_berkas.no_id = tb_pendaftaran.no_id', 'LEFT')
            ->orderBy('tb_pendaftaran.id_pendaftaran')
            ->get()->getResultArray();
    }

    public function cek_berkas()
    {
        return $this->db->table('tb_berkas')
            ->join('tb_pendaftaran', 'tb_berkas.no_id = tb_pendaftaran.no_id', 'LEFT')
            ->get()->getResultArray();
    }

    public function konfirmasi_data($data, $id_berkas)
    {
        return $this->db->table('tb_berkas')->update($data, array('id_berkas' => $id_berkas));
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

    public function statusku()
    {
        $nisn = session()->get('no_id');
        return $this->db->table('tb_pendaftaran')
            ->where(array('tb_pendaftaran.no_id' => $nisn))
            ->where(array('tb_berkas.no_id' => $nisn))
            ->join('tb_berkas', 'tb_berkas.no_id = tb_pendaftaran.no_id', 'LEFT')
            ->get()->getResultArray();
    }

    public function detail_daftar($id_pendaftaran)
    {
        return $this->db->table('tb_pendaftaran')
            ->where('no_pendaftaran', $id_pendaftaran)
            ->join('tb_berkas', 'tb_berkas.no_id = tb_pendaftaran.no_id', 'LEFT')
            ->join('tb_orangtua', 'tb_orangtua.no_id = tb_pendaftaran.no_id', 'LEFT')
            ->join('tb_periodik', 'tb_periodik.no_id = tb_pendaftaran.no_id', 'LEFT')
            ->get()->getRowArray();
    }

    public function get_daftar()
    {
        return $this->db->table('tb_pendaftaran')->get()->getResultArray();
    }
}
