<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Landing');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Landing::index');
$routes->get('/dashboard/admin', 'Dashboard::admin', ['filter' => 'auth']);
$routes->get('/dashboard/users', 'Dashboard::users', ['filter' => 'auth']);
$routes->get('/dashboard/printpdf', 'Dashboard::printpdf', ['filter' => 'auth']);

$routes->get('/', 'Jadwal::index', ['filter' => 'auth']);
$routes->get('/jadwal/hasil_tes', 'Jadwal::users', ['filter' => 'auth']);
$routes->get('/jadwal/jadwalpdf', 'Jadwal::jadwalpdf', ['filter' => 'auth']);
$routes->get('/jadwal/import_jadwal', 'Jadwal::import_jadwal', ['filter' => 'auth']);
$routes->get('/jadwal/prosesExcel', 'Jadwal::prosesExcel', ['filter' => 'auth']);
$routes->get('/jadwal/download_template', 'Jadwal::download_template', ['filter' => 'auth']);
$routes->get('/jadwal/download_hasil', 'Jadwal::download_hasil', ['filter' => 'auth']);
$routes->get('/jadwal/download_biaya', 'Jadwal::download_biaya', ['filter' => 'auth']);
$routes->get('/jadwal/proses_hasil', 'Jadwal::proses_hasil', ['filter' => 'auth']);

$routes->get('/users/data_users', 'Users::data_users', ['filter' => 'auth']);
$routes->get('/users/riset_users', 'Users::riset_users', ['filter' => 'auth']);
$routes->get('/users/riset', 'Users::riset', ['filter' => 'auth']);
$routes->get('/users/update', 'Users::update', ['filter' => 'auth']);

$routes->get('/', 'Pendaftaran::index', ['filter' => 'auth']);
$routes->get('/pendaftaran/form_pendaftaran', 'Pendaftaran::form_pendaftaran', ['filter' => 'auth']);
$routes->get('/pendaftaran/form_pendaftaran_wali', 'Pendaftaran::form_pendaftaran_wali', ['filter' => 'auth']);
$routes->get('/pendaftaran/form_data_periodik', 'Pendaftaran::form_data_periodik', ['filter' => 'auth']);
$routes->get('/pendaftaran/form_data_berkas', 'Pendaftaran::form_data_berkas', ['filter' => 'auth']);
$routes->get('/pendaftaran/cek_status', 'Pendaftaran::cek_status', ['filter' => 'auth']);
$routes->get('/pendaftaran/biodata', 'Pendaftaran::biodata', ['filter' => 'auth']);
$routes->get('/pendaftaran/simpan_data_siswa', 'Pendaftaran::simpan_data_siswa', ['filter' => 'auth']);
$routes->get('/pendaftaran/simpan_data_ortu', 'Pendaftaran::simpan_data_ortu', ['filter' => 'auth']);
$routes->get('/pendaftaran/simpan_data_periodik', 'Pendaftaran::simpan_data_periodik', ['filter' => 'auth']);
$routes->get('/pendaftaran/simpan_data_berkas', 'Pendaftaran::simpan_data_berkas', ['filter' => 'auth']);
$routes->get('/pendaftaran/download_kk', 'Pendaftaran::download_kk', ['filter' => 'auth']);
$routes->get('/pendaftaran/download_akta', 'Pendaftaran::download_akta', ['filter' => 'auth']);
$routes->get('/pendaftaran/download_ayah', 'Pendaftaran::download_ayah', ['filter' => 'auth']);
$routes->get('/pendaftaran/download_ibu', 'Pendaftaran::download_ibu', ['filter' => 'auth']);

$routes->get('/pendaftaran/download_wali', 'Pendaftaran::download_wali', ['filter' => 'auth']);
$routes->get('/pendaftaran/download_siswa', 'Pendaftaran::download_siswa', ['filter' => 'auth']);
$routes->get('/pendaftaran/download_bayar', 'Pendaftaran::printpdf', ['filter' => 'auth']);
$routes->get('/pendaftaran/printpdf', 'Pendaftaran::update', ['filter' => 'auth']);
$routes->get('/pendaftaran/data_pendaftaran', 'Pendaftaran::data_pendaftaran', ['filter' => 'auth']);
$routes->get('/pendaftaran/detail', 'Pendaftaran::detail', ['filter' => 'auth']);
$routes->get('/pendaftaran/data_detail', 'Pendaftaran::data_detail', ['filter' => 'auth']);
$routes->get('/pendaftaran/data_verifikasi', 'Pendaftaran::data_verifikasi', ['filter' => 'auth']);
$routes->get('/pendaftaran/konfirmasi', 'Pendaftaran::konfirmasi', ['filter' => 'auth']);

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
