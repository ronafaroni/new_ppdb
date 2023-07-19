<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use PHPExcel;
use PHPExcel_IOFactory;
use TCPDF;

class Jadwal extends BaseController
{

    public function __construct()
    {
        helper('form', 'download');
        $this->JadwalModel = new JadwalModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Jadwal',
            'status'     => $this->JadwalModel->get_status(),
            'jadwal_tes'     => $this->JadwalModel->jadwal(),
            'isi'       => 'jadwal/users/v_jadwal',
        ];
        echo view('layout/users/v_wrapper', $data);
    }

    public function hasil_Asesmen()
    {
        $data = [
            'title'     => 'Hasil Tes',
            'status'     => $this->JadwalModel->get_status(),
            'daftar'     => $this->JadwalModel->get_pendaftaran(),
            'hasil'     => $this->JadwalModel->get_hasil(),
            'jadwal'     => $this->JadwalModel->get_jadwal(),
            'isi'       => 'jadwal/users/v_hasil_asesmen',
        ];
        echo view('layout/users/v_wrapper', $data);
    }

    public function jadwalpdf()
    {
        $data = [
            'title'      => 'Print PDF',
            'status'     => $this->JadwalModel->get_status(),
            'daftar'     => $this->JadwalModel->get_pendaftaran(),
            'jadwal'     => $this->JadwalModel->get_jadwal(),
            'isi'        => 'jadwal/users/v_printpdf',
        ];

        $html = view('jadwal/users/v_printpdf', $data);


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
        $nisn = session()->get('no_nisn');
        $nama = session()->get('nama_users');
        $pdf->Output('jadwal_tes_' . $nisn . '_' . $nama . '.pdf', 'I');
    }

    public function import_jadwal()
    {
        $data = [
            'title'     => 'Jadwal',
            'excel'     => $this->JadwalModel->import_excel(),
            'isi'       => 'jadwal/admin/v_import_jadwal',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function prosesExcel()
    {
        $file = $this->request->getFile('data_jadwal');

        new PHPExcel;
        $fileLocation = $file->getTempName();
        //baca file
        $objPHPExcel = PHPExcel_IOFactory::load($fileLocation);
        //ambil sheet active
        $sheet    = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        //looping untuk mengambil data
        foreach ($sheet as $idx => $data) {
            //skip index 1 karena title excel
            if ($idx == 1) {
                continue;
            }

            $no = $this->JadwalModel->cek_data($data['B']);
            if ($data['B'] == $no['no_pendaftaran']) {
                continue;
            }

            $data = array(
                'no_nisn'           => $data['A'],
                'no_pendaftaran'    => $data['B'],
                'nama_peserta'      => $data['C'],
                'tgl_tes_psikotes'  => $data['D'],
                'waktu_tes_psikotes'  => $data['E'],
                'ruangan_psikotes'  => $data['F'],
                'tgl_tes_observasi' => $data['G'],
                'waktu_tes_observasi' => $data['H'],
                'ruangan_observasi' => $data['I'],
                'tgl_tes_wawancara' => $data['J'],
                'waktu_tes_wawancara' => $data['K'],
                'ruangan_wawancara' => $data['L'],
            );
            $this->JadwalModel->import($data);
            session()->setFlashdata('success', 'Berhasil import data excel');
            return redirect()->to(base_url('jadwal/import_jadwal'));
        }
        session()->setFlashdata('gagal', 'Mohon Maaf! Data yang anda import sudah ada.');
        return redirect()->to(base_url('jadwal/import_jadwal'));
    }

    public function download_template()
    {
        return $this->response->download(ROOTPATH . '/public/downloads/template_import_jadwal.xlsx', null);
    }

    public function import_hasil_tes()
    {
        $data = [
            'title'     => 'Hasil Tes',
            'status'     => $this->JadwalModel->get_status(),
            'daftar'     => $this->JadwalModel->get_pendaftaran(),
            'hasil'     => $this->JadwalModel->get_hasil(),
            'isi'       => 'jadwal/admin/v_import_hasil_tes',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    public function download_hasil()
    {
        return $this->response->download(ROOTPATH . '/public/downloads/template_import_hasil_tes.xlsx', null);
    }

    public function download_biaya()
    {
        return $this->response->download(ROOTPATH . '/public/downloads/Biaya_PPDB_2021.pdf', null);
    }

    public function prosesHasil()
    {
        $file = $this->request->getFile('data_hasil');

        new PHPExcel;
        $fileLocation = $file->getTempName();
        //baca file
        $objPHPExcel = PHPExcel_IOFactory::load($fileLocation);
        //ambil sheet active
        $sheet    = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        //looping untuk mengambil data
        foreach ($sheet as $idx => $data) {
            //skip index 1 karena title excel
            if ($idx == 1) {
                continue;
            }

            $no = $this->JadwalModel->cek_data2($data['B']);
            if ($data['B'] == $no['no_pendaftaran']) {
                continue;
            }

            $data = array(
                'no_nisn'           => $data['A'],
                'no_pendaftaran'    => $data['B'],
                'nama_peserta'      => $data['C'],
                'hasil_tes'         => $data['D'],
            );
            $this->JadwalModel->importHasil($data);
        }
        session()->setFlashdata('success', 'Berhasil import data excel');
        return redirect()->to(base_url('jadwal/import_hasil_tes'));
    }

    public function excel()
    {
        $data = [
            'title'     => 'Jadwal Tes',
            'excel'     => $this->JadwalModel->import_excel(),
        ];
        echo view('jadwal/admin/v_data_excel', $data);
    }

    public function hasil()
    {
        $data = [
            'title'     => 'Hasil Tes',
            'excel'     => $this->JadwalModel->import_excel(),
        ];
        echo view('jadwal/admin/v_data_excel', $data);
    }

    public function excelHasil()
    {
        $data = [
            'title'     => 'Jadwal',
            'excel'     => $this->JadwalModel->import_excel(),
        ];
        echo view('jadwal/admin/v_hasil_excel', $data);
    }

    public function printHasil()
    {
        $data = [
            'title'     => 'Jadwal',
            'excel'     => $this->JadwalModel->import_excel(),
        ];
        echo view('jadwal/admin/v_hasil_print', $data);
    }

    //--------------------------------------------------------------------

}
