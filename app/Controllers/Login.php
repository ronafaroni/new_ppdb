<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;
use CodeIgniter\HTTP\Request;
use CodeIgniter\Validation\Validation as ValidationValidation;
use Config\Validation;

class Login extends BaseController
{
    protected $LoginModel;

    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        echo view('login/v_form_login');
    }

    public function registrasi()
    {
        echo view('login/v_form_registrasi');
    }

    public function cek_login()
    {
        $session = \Config\Services::session();
        $validation = \Config\Services::validation();

        $username   = $this->request->getPost('username');
        $password   = $this->request->getPost('password');

        $data = [
            'username'  => $username,
            'password'  => $password,
        ];

        if ($validation->run($data, 'login') == false) {
            session()->setFlashdata('errors', $validation->getErrors());
            session()->setFlashdata('inputs', $this->request->getPost());
            return redirect()->to(base_url('login'));
        } else {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->LoginModel->cek_login($username, $password);
            if (($cek['username'] == $username) && ($cek['password'] == $password)) {
                //jika username dan password benar
                session()->set('username', $cek['username']);
                session()->set('no_id', $cek['username']);
                session()->set('nama_users', $cek['nama_users']);
                session()->set('tgl_lahir', $cek['tgl_lahir']);
                session()->set('tgl_update', $cek['tgl_update']);
                session()->set('role', $cek['role']);

                $role = session()->get('role');

                if ($role == 'admin') {
                    return redirect()->to(base_url('dashboard/admin'));
                } else if ($role == 'users') {
                    return redirect()->to(base_url('dashboard/users'));
                }
            } else {
                //jika username dan password salah
                session()->setFlashdata('gagal', 'Mohon maaf username atau password anda salah.');
                return redirect()->to(base_url('login'));
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

    public function simpan_registrasi()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('Y/m/d h:i:s');
        $data = [
            'username'      => $this->request->getPost('username'),
            'password'      => $this->request->getPost('password'),
            'no_id'       => $this->request->getPost('username'),
            'nama_users'    => strtoupper($this->request->getPost('nama_users')),
            'tgl_lahir'     => $this->request->getPost('tgl_users'),
            'role'          => 'users',
            'tgl_update'    => $tgl_update,
        ];

        $tgl = strtotime($this->request->getPost('tgl_users'));
        $tgl_batas = strtotime('07/01/2015');
        if ($tgl < $tgl_batas) {
            if ($validation->run($data, 'registrasi') == false) {
                session()->setFlashdata('inputs', $this->request->getPost());
                session()->setFlashdata('errors', $validation->getErrors());
                return redirect()->to(base_url('login/registrasi'));
            } else {
                $this->LoginModel->insert_data($data);
                session()->setFlashdata('success', 'Selamat! Pendaftaran akun berhasil.');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('gagal', 'Mohon Maaf! umur belum anda mencukupi.');
            return redirect()->to(base_url('login/registrasi'));
        }
    }

    //--------------------------------------------------------------------

}
