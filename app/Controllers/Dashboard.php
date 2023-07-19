<?php

namespace App\Controllers;

use App\Models\DashboardModel;

use App\Config\UserAgents;
use CodeIgniter\HTTP\Request;

use TCPDF;

class Dashboard extends BaseController
{

    public function __construct()
    {
        helper('form', 'download');
        $this->DashboardModel = new DashboardModel();
    }

    public function users()
    {
        $agent = $this->request->getUserAgent();

        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
        } elseif ($agent->isRobot()) {
            $currentAgent = $this->agent->robot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }

        $data = [
            'title'     => 'Dashboard',
            'browser'   =>  $currentAgent,
            'ip'        => $this->request->getIPAddress(),
            'os'        => $agent->getPlatform(),
            'status'    => $this->DashboardModel->get_status(),
            'konfirmasi' => $this->DashboardModel->get_konfirmasi(),

            'status'     => $this->DashboardModel->get_status(),
            'daftar'     => $this->DashboardModel->get_pendaftaran(),
            'ortu'       => $this->DashboardModel->get_ortu(),
            'periodik'   => $this->DashboardModel->get_periodik(),
            'berkas'     => $this->DashboardModel->get_berkas(),

            'isi'       => 'dashboard/users/v_dashboard',
        ];
        echo view('layout/users/v_wrapper', $data);
    }

    public function printpdf()
    {
        $data = [
            'title'      => 'Print PDF',
            'status'     => $this->PendaftaranModel->get_status(),
            'daftar'     => $this->PendaftaranModel->get_pendaftaran(),
            'ortu'       => $this->PendaftaranModel->get_ortu(),
            'periodik'   => $this->PendaftaranModel->get_periodik(),
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
        $nisn = session()->get('no_nisn');
        $nama = session()->get('nama_users');
        $pdf->Output('kartu_pendaftaran_' . $nisn . '_' . $nama . '.pdf', 'I');
    }

    public function admin()
    {
        $agent = $this->request->getUserAgent();

        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
        } elseif ($agent->isRobot()) {
            $currentAgent = $this->agent->robot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }

        $data = [
            'title'     => 'Dashboard',
            'browser'   =>  $currentAgent,
            'ip'        => $this->request->getIPAddress(),
            'os'        => $agent->getPlatform(),
            'isi'       => 'dashboard/admin/v_admin_dashboard',
        ];
        echo view('layout/admin/va_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
