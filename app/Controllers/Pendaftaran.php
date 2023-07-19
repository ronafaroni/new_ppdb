<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;
use App\Models\PendaftaranModel;

use TCPDF;

class Pendaftaran extends BaseController
{

    public function __construct()
    {
        helper('form', 'download');
        $this->PendaftaranModel = new PendaftaranModel();
    }

    public function pendaftaran_peserta()
    {
        $data = [
            'status'        => $this->PendaftaranModel->get_status(),
            'title'         => 'Pendaftaran',
            'menu_siswa'    => $this->PendaftaranModel->get_pendaftaran(),
            'menu_ortu'     => $this->PendaftaranModel->get_ortu(),
            'menu_periodik' => $this->PendaftaranModel->get_periodik(),
            'menu_berkas'   => $this->PendaftaranModel->get_berkas(),
            'isi'           => 'pendaftaran/users/v_new_pendaftaran',
        ];
        echo view('layout/users/v_wrapper', $data);
    }

    public function form_pendaftaran()
    {
        $data = [
            'title'     => 'Pendaftaran',
            'status'     => $this->PendaftaranModel->get_status(),
            'isi'       => 'pendaftaran/users/v_form_pendaftaran',
        ];
        echo view('layout/users/v_wrapper', $data);
    }

    public function form_pendaftaran_wali()
    {
        $data = [
            'title'     => 'Pendaftaran',
            'status'     => $this->PendaftaranModel->get_status(),
            'isi'       => 'pendaftaran/users/v_form_pendaftaran_wali',
        ];
        echo view('layout/users/v_wrapper', $data);
    }

    public function form_data_periodik()
    {
        $data = [
            'title'     => 'Pendaftaran',
            'status'     => $this->PendaftaranModel->get_status(),
            'isi'       => 'pendaftaran/users/v_form_periodik',
        ];
        echo view('layout/users/v_wrapper', $data);
    }

    public function form_data_berkas()
    {
        $data = [
            'title'         => 'Pendaftaran',
            'status'     => $this->PendaftaranModel->get_status(),
            'menu_berkas'   => $this->PendaftaranModel->get_berkas(),
            'isi'           => 'pendaftaran/users/v_form_berkas',
        ];
        echo view('layout/users/v_wrapper', $data);
    }

    public function cek_status()
    {
        $data = [
            'title'      => 'Status',
            'status'     => $this->PendaftaranModel->get_status(),
            'statusku'   => $this->PendaftaranModel->statusku(),
            'daftar'     => $this->PendaftaranModel->get_pendaftaran(),
            'berkas'     => $this->PendaftaranModel->get_berkas(),
            'isi'        => 'pendaftaran/users/v_form_status',
        ];
        echo view('layout/users/v_wrapper', $data);
    }

    public function biodata()
    {
        $data = [
            'title'      => 'Biodata',
            'status'     => $this->PendaftaranModel->get_status(),

            'daftar'     => $this->PendaftaranModel->get_pendaftaran(),
            'ortu'       => $this->PendaftaranModel->get_ortu(),
            'periodik'   => $this->PendaftaranModel->get_periodik(),
            'berkas'     => $this->PendaftaranModel->get_berkas(),
            'isi'        => 'pendaftaran/users/v_biodata',
        ];
        echo view('layout/users/v_wrapper', $data);
    }

    public function simpan_data_siswa()
    {
        $validation = \Config\Services::validation();
        $db = \Config\Database::connect();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('Y-m-d h:i:s');
        $id = session()->get('no_id');

        $builder = $db->table('tb_pendaftaran');
        $builder->select('id_pendaftaran');
        $builder->orderBy('id_pendaftaran', 'DESC');
        $builder->limit(1);
        $query = $builder->get();
        $row   = $query->getRow();


        if ($row > ' ') {
            $kode = intval($row->id_pendaftaran) + 1;
        } else {
            $kode = 1;
        }

        $kode_nisn  = intval(session()->get('no_id'));

        $nilai = substr($kode_nisn, -3);
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "021" . $nilai . $kodemax;    // hasilnya ODJ-9921-0001 dst.

        $data = [
            'no_id'             => $id,
            'no_pendaftaran'    => $kodejadi,
            'nama_peserta'      => $this->request->getPost('nama_peserta'),
            'jns_kelamin'       => $this->request->getPost('jenis_kelamin'),

            'tempat_lahir'      => $this->request->getPost('tempat_lahir'),
            'tgl_lahir'         => session()->get('tgl_lahir'),

            'nama_ayah'         =>  strtoupper($this->request->getPost('nama_ayah')),
            'nama_ibu'          =>  strtoupper($this->request->getPost('nama_ibu')),
            'no_telp'           => $this->request->getPost('nomor'),

            'alamat'            => $this->request->getPost('alamat'),

            'asal_tk'           => strtoupper($this->request->getPost('asal_tk')),
            'alamat_tk'         => strtoupper($this->request->getPost('alamat_tk')),

            'tgl_update'        => $tgl_update,
        ];

        if ($validation->run($data, 'pendaftaran') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('pendaftaran/pendaftaran_peserta'));
        } else {
            $this->PendaftaranModel->insert_data($data);
            session()->setFlashdata('success', 'Selamat! Data Pendaftaran siswa baru sudah berhasil di kirim.');
            return redirect()->to(base_url('pendaftaran/pendaftaran_peserta'));
        }
    }

    public function simpan_data_ortu()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('m/d/Y h:i:s');
        $nisn = session()->get('no_nisn');

        $data = [
            'no_nisn'          => $nisn,
            'nama_ayah'         => $this->request->getPost('nama_ayah'),
            'nik_ayah'          => $this->request->getPost('nik_ayah'),
            'tempat_lahir_ayah' => $this->request->getPost('tempat_lahir_ayah'),
            'tgl_lahir_ayah'    => $this->request->getPost('tgl_lahir_ayah'),
            'pendidikan_ayah'   => $this->request->getPost('pendidikan_ayah'),
            'pekerjaan_ayah'    => $this->request->getPost('pekerjaan_ayah'),
            'penghasilan_ayah'  => $this->request->getPost('penghasilan_ayah'),
            'no_hp_ayah'        => $this->request->getPost('no_hp_ayah'),
            'email_ayah'        => $this->request->getPost('email_ayah'),

            'nama_ibu'         => $this->request->getPost('nama_ibu'),
            'nik_ibu'          => $this->request->getPost('nik_ibu'),
            'tempat_lahir_ibu' => $this->request->getPost('tempat_lahir_ibu'),
            'tgl_lahir_ibu'    => $this->request->getPost('tgl_lahir_ibu'),
            'pendidikan_ibu'   => $this->request->getPost('pendidikan_ibu'),
            'pekerjaan_ibu'    => $this->request->getPost('pekerjaan_ibu'),
            'penghasilan_ibu'  => $this->request->getPost('penghasilan_ibu'),
            'no_hp_ibu'        => $this->request->getPost('no_hp_ibu'),
            'email_ibu'        => $this->request->getPost('email_ibu'),

            'nama_wali'         => $this->request->getPost('nama_wali'),
            'nik_wali'          => $this->request->getPost('nik_wali'),
            'tempat_lahir_wali' => $this->request->getPost('tempat_lahir_wali'),
            'tgl_lahir_wali'    => $this->request->getPost('tgl_lahir_wali'),
            'pendidikan_wali'   => $this->request->getPost('pendidikan_wali'),
            'pekerjaan_wali'    => $this->request->getPost('pekerjaan_wali'),
            'penghasilan_wali'  => $this->request->getPost('penghasilan_wali'),
            'no_hp_wali'        => $this->request->getPost('no_hp_wali'),
            'email_wali'        => $this->request->getPost('email_wali'),

            'tgl_update'        => $tgl_update,
        ];

        if ($validation->run($data, 'orangtua') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('pendaftaran/form_pendaftaran_wali'));
        } else {
            $this->PendaftaranModel->insert_data_wali($data);
            session()->setFlashdata('success', 'Selamat! Data Orang Tua & Wali sudah berhasil di simpan.');
            return redirect()->to(base_url('pendaftaran'));
        }
    }

    public function simpan_data_periodik()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('m/d/Y h:i:s');
        $nisn = session()->get('no_nisn');
        $data = [
            'no_nisn'           => $nisn,
            'tinggi'            => $this->request->getPost('tinggi'),
            'berat'             => $this->request->getPost('berat'),
            'jarak'             => $this->request->getPost('jarak'),
            'jarak_angka'       => $this->request->getPost('jarak_angka'),
            'waktu_tempuh_jam'  => $this->request->getPost('waktu_tempuh_jam'),
            'waktu_tempuh_menit' => $this->request->getPost('waktu_tempuh_menit'),
            'jumlah_saudara'    => $this->request->getPost('jumlah_saudara'),
            'anak_ke'           => $this->request->getPost('anak_ke'),
            'telp'              => $this->request->getPost('telp'),
            'tgl_update'        => $tgl_update,
        ];
        if ($validation->run($data, 'periodik') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('pendaftaran/form_data_periodik'));
        } else {
            $this->PendaftaranModel->insert_data_periodik($data);
            session()->setFlashdata('success', 'Selamat! Data Periodik sudah berhasil di simpan.');
            return redirect()->to(base_url('pendaftaran'));
        }
    }

    public function simpan_data_berkas()
    {
        $validation = \Config\Services::validation();
        $id = session()->get('no_id');
        $nama   = session()->get('nama_users');

        //mengambil file upload
        $kk = $this->request->getFile('kartu_keluarga');
        $akta = $this->request->getFile('akta_kelahiran');
        $ktp_ortu = $this->request->getFile('ktp_ortu');
        $siswa = $this->request->getFile('siswa');
        $bayar = $this->request->getFile('bayar');

        //random nama file yang diupload
        $id = session()->get('no_id');
        $nama   = session()->get('nama_users');
        //$request = \Config\Services::request();

        $name = $kk->getName(); // Mengetahui Nama File
        $originalName = $kk->getClientName(); // Mengetahui Nama Asli
        $tempfile = $kk->getTempName(); // Mengetahui Nama TMP File name
        $ext = $kk->getClientExtension(); // Mengetahui extensi File
        $type = $kk->getClientMimeType(); // Mengetahui Mime File
        $size_kb = $kk->getSize('kb'); // Mengetahui Ukuran File dalam kb
        $size_mb = $kk->getSize('mb'); // Mengetahui Ukuran File dalam mb

        $name = $akta->getName(); // Mengetahui Nama File
        $originalName = $akta->getClientName(); // Mengetahui Nama Asli
        $tempfile = $akta->getTempName(); // Mengetahui Nama TMP File name
        $ext = $akta->getClientExtension(); // Mengetahui extensi File
        $type = $akta->getClientMimeType(); // Mengetahui Mime File
        $size_kb = $akta->getSize('kb'); // Mengetahui Ukuran File dalam kb
        $size_mb = $akta->getSize('mb'); // Mengetahui Ukuran File dalam mb

        $name = $ktp_ortu->getName(); // Mengetahui Nama File
        $originalName = $ktp_ortu->getClientName(); // Mengetahui Nama Asli
        $tempfile = $ktp_ortu->getTempName(); // Mengetahui Nama TMP File name
        $ext = $ktp_ortu->getClientExtension(); // Mengetahui extensi File
        $type = $ktp_ortu->getClientMimeType(); // Mengetahui Mime File
        $size_kb = $ktp_ortu->getSize('kb'); // Mengetahui Ukuran File dalam kb
        $size_mb = $ktp_ortu->getSize('mb'); // Mengetahui Ukuran File dalam mb

        $name = $siswa->getName(); // Mengetahui Nama File
        $originalName = $siswa->getClientName(); // Mengetahui Nama Asli
        $tempfile = $siswa->getTempName(); // Mengetahui Nama TMP File name
        $ext = $siswa->getClientExtension(); // Mengetahui extensi File
        $type = $siswa->getClientMimeType(); // Mengetahui Mime File
        $size_kb = $siswa->getSize('kb'); // Mengetahui Ukuran File dalam kb
        $size_mb = $siswa->getSize('mb'); // Mengetahui Ukuran File dalam mb

        $name = $bayar->getName(); // Mengetahui Nama File
        $originalName = $bayar->getClientName(); // Mengetahui Nama Asli
        $tempfile = $bayar->getTempName(); // Mengetahui Nama TMP File name
        $ext = $bayar->getClientExtension(); // Mengetahui extensi File
        $type = $bayar->getClientMimeType(); // Mengetahui Mime File
        $size_kb = $bayar->getSize('kb'); // Mengetahui Ukuran File dalam kb
        $size_mb = $bayar->getSize('mb'); // Mengetahui Ukuran File dalam mb

        $name_kk        = 'KK_' . $id . '_' . $nama . '.' . $ext;
        $name_akta      = 'AK_' . $id . '_' . $nama . '.' . $ext;
        $name_ortu      = 'KTP_' . $id . '_' . $nama . '.' . $ext;
        $name_siswa     = 'FT_' . $id . '_' . $nama . '.' . $ext;
        $name_bayar     = 'BYR_' . $id . '_' . $nama . '.' . $ext;

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('Y-m-d h:i:s');
        $id = session()->get('no_id');

        $data = [
            'no_id'         => $id,
            'foto_kk'       => $name_kk,
            'foto_akta'     => $name_akta,
            'foto_ktp_ortu' => $name_ortu,
            'foto_siswa'    => $name_siswa,
            'foto_bayar'    => $name_bayar,
            'tgl_update'    => $tgl_update,
        ];

        if ($validation->run($data, 'berkas') == false) {
            session()->setflashdata('inputs', $this->request->getPost());
            session()->setflashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('pendaftaran/form_data_berkas'));
        } else {
            $kk->move(ROOTPATH . 'public/uploads', $name_kk);
            $akta->move(ROOTPATH . 'public/uploads', $name_akta);
            $ktp_ortu->move(ROOTPATH . 'public/uploads', $name_ortu);
            $siswa->move(ROOTPATH . 'public/uploads', $name_siswa);
            $bayar->move(ROOTPATH . 'public/uploads', $name_bayar);

            $this->PendaftaranModel->insert_berkas($data);
            session()->setFlashdata('success', 'Selamat! Data berkas berhasil ditambahkan');
            return redirect()->to(base_url('pendaftaran/form_data_berkas'));
        }
    }

    function download_kk($id_berkas)
    {
        $data = ['id_berkas' => $id_berkas,];
        $file_info = $this->PendaftaranModel->download($data);

        if (isset($file_info)) {
            return $this->response->download(ROOTPATH . '/public/uploads/' . $file_info['foto_kk'], null);
        }
    }

    function download_akta($id_berkas)
    {
        $data = ['id_berkas' => $id_berkas,];
        $file_info = $this->PendaftaranModel->download($data);

        if (isset($file_info)) {
            return $this->response->download(ROOTPATH . '/public/uploads/' . $file_info['foto_akta'], null);
        }
    }

    function download_ortu($id_berkas)
    {
        $data = ['id_berkas' => $id_berkas,];
        $file_info = $this->PendaftaranModel->download($data);

        if (isset($file_info)) {
            return $this->response->download(ROOTPATH . '/public/uploads/' . $file_info['foto_ktp_ortu'], null);
        }
    }

    function download_siswa($id_berkas)
    {
        $data = ['id_berkas' => $id_berkas,];
        $file_info = $this->PendaftaranModel->download($data);

        if (isset($file_info)) {
            return $this->response->download(ROOTPATH . '/public/uploads/' . $file_info['foto_siswa'], null);
        }
    }

    function download_bayar($id_berkas)
    {
        $data = ['id_berkas' => $id_berkas,];
        $file_info = $this->PendaftaranModel->download($data);

        if (isset($file_info)) {
            return $this->response->download(ROOTPATH . '/public/uploads/' . $file_info['foto_bayar'], null);
        }
    }

    public function cetakpdf()
    {
        $data = [
            'title'      => 'Print PDF',
            'konfirmasi' => $this->PendaftaranModel->get_konfirmasi(),
            'status'     => $this->PendaftaranModel->get_status(),
            'daftar'     => $this->PendaftaranModel->get_pendaftaran(),
            'berkas'     => $this->PendaftaranModel->get_berkas(),
            'isi'        => 'pendaftaran/users/v_printpdf',
        ];

        $html = view('pendaftaran/users/v_printpdf', $data);


        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetTitle('Print PDF | PPDB Online 2021');

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // set default font subsetting mode
        $pdf->setFontSubsetting(true);
        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();
        // Print text using writeHTMLCell()
        $pdf->writeHTML($html);
        $this->response->setContentType('application/pdf');
        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $nisn = session()->get('no_id');
        $nama = session()->get('nama_users');
        $pdf->Output('kartu_pendaftaran_' . $nisn . '_' . $nama . '.pdf', 'I');
    }

    /////////////////////////////////////  DATA ADMIN  ////////////////////////////////////////////////////

    public function data_pendaftaran()
    {
        $data = [
            'title'         => 'Pendaftaran',
            'daftar'        => $this->PendaftaranModel->get_data_pendaftaran(),
            'isi'           => 'pendaftaran/admin/v_data_pendaftaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function detail($id_pendaftaran)
    {
        $data = [
            'title'     => 'Detail Pendaftaran',
            'detail'    => $this->PendaftaranModel->detail_daftar($id_pendaftaran),
            'isi'         => 'pendaftaran/admin/v_detail_pendaftaran',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function data_detail()
    {
        $data = [
            'title'         => 'Status',
            'daftar'        => $this->PendaftaranModel->get_detail_pendaftaran(),
            'isi'           => 'pendaftaran/admin/v_data_detail',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function data_verifikasi()
    {
        $data = [
            'title'         => 'Verifikasi',
            'berkasku'        => $this->PendaftaranModel->cek_berkas(),
            'isi'           => 'pendaftaran/admin/v_data_verifikasi',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function konfirmasi($id_berkas)
    {
        $validation = \Config\Services::validation();

        $data = [
            'status_pengajuan' => $this->request->getPost('konfirmasi'),
            'catatan' => $this->request->getPost('catatan'),
        ];

        if ($validation->run($data, 'konfirmasi') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('pendaftaran/data_verifikasi'));
        } else {
            $this->PendaftaranModel->konfirmasi_data($data, $id_berkas);
            session()->setFlashdata('success', 'Data berhasil dikonfirmasi.');
            return redirect()->to(base_url('pendaftaran/data_verifikasi'));
        }
    }

    public function PDFPrint()
    {
        $data = [
            'title'      => 'Print PDF',
            'daftar'        => $this->PendaftaranModel->get_data_pendaftaran(),
            'isi'        => 'pendaftaran/users/v_PDFPrint',
        ];

        $html = view('pendaftaran/admin/v_PDFPrint', $data);


        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetTitle('Print PDF | PPDB Online 2021');

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // set default font subsetting mode
        $pdf->setFontSubsetting(true);
        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();
        // Print text using writeHTMLCell()
        $pdf->writeHTML($html);
        $this->response->setContentType('application/pdf');
        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $nisn = session()->get('no_id');
        $nama = session()->get('nama_users');
        $pdf->Output('kartu_pendaftaran_' . $nisn . '_' . $nama . '.pdf', 'I');
    }

    public function PrintPendaftar()
    {
        $data = [
            'title'         => 'Print Data Pendaftaran',
            'daftar'       => $this->PendaftaranModel->get_daftar(),
            'menu_berkas'   => $this->PendaftaranModel->get_berkas(),
            'isi'           => 'pendaftaran/admin/v_PrintData',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function ExcelPrint()
    {
        $data = [
            'title'         => 'Print Data Pendaftaran',
            'daftar'        => $this->PendaftaranModel->get_daftar(),
            'menu_berkas'   => $this->PendaftaranModel->get_berkas(),
        ];
        echo view('pendaftaran/admin/v_PrintExcel', $data);
    }
}
