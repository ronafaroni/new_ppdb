<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;
use App\Models\UsersModel;

class Users extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->UsersModel = new UsersModel();
    }

    public function data_users()
    {
        $data = [
            'title'     => 'Manajemen Users',
            'users'      => $this->UsersModel->get_users(),
            'isi'       => 'users/v_form_users',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function riset_users()
    {
        $data = [
            'title'     => 'Manajemen Users',
            'users'      => $this->UsersModel->get_users(),
            'isi'       => 'users/v_form_password',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function reset($id_users)
    {
        $data = [
            'title'     => 'Edit Product',
            'data'      => $this->UsersModel->edit_password($id_users),
            'isi'       => 'users/v_form_password',
        ];
        echo view('layout/admin/v_wrapper', $data);
    }

    public function hapus($id_users = NULL)
    {
        $this->UsersModel->hapus_akun($id_users);
        session()->setFlashdata('success', 'Akun berhasil dihapus.');
        return redirect()->to(base_url('users/data_users'));
    }

    public function update($id_users)
    {
        $validation = \Config\Services::validation();

        $data = [
            'password' => $this->request->getPost('password'),
        ];

        if ($validation->run($data, 'reset') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('users/riset_users'));
        } else {
            $this->UsersModel->update_password($data, $id_users);
            session()->setFlashdata('success', 'Password berhasil direset.');
            return redirect()->to(base_url('users/riset_users'));
        }
    }

    //--------------------------------------------------------------------

}
