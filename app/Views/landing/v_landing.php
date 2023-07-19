<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page | PPDB Online 2021</title>
    <link rel="shortcut icon" type="image/png" href="https://via.placeholder.com/16x16">
    <link rel="stylesheet" href="<?= base_url() ?>/public/landing/css/main.css" />
    <script src="<?= base_url() ?>/public/landing/js/uikit.js"></script>

    <link rel="stylesheet" href="<?= base_url() ?>/public/template/styles/font.css" type="text/css" />

    <link rel="stylesheet" href="<?= base_url() ?>/public/template/libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />


</head>

<body>

    <header class="uk-background uk-background-norepeat uk-background-cover uk-background-center-center uk-light" style="background-image: url(<?= base_url() ?>/public/landing/images/header.png);">
        <div class="uk-section uk-position-relative uk-position-z-index" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
            <div class="uk-container">
                <img src="<?= base_url(); ?>/public/landing/images/landing.png" alt="">
                <br>
                <div class="hero-search uk-margin-medium-top">
                    <form class="uk-search uk-search-default uk-width-1-1" name="search-hero" onsubmit="return false;">
                        <span data-uk-search-icon="ratio: 1.2"></span>
                        <input class="uk-search-input uk-form-large uk-border-rounded" type="search" autocomplete="off" data-minchars="1" data-maxitems="30">
                    </form>
                </div>
            </div>
        </div>

    </header>

    <div class="uk-section uk-section-muted">
        <div class="uk-container">
            <h2 class="uk-text-center uk-margin-remove-top" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true"><b>Selamat Datang,</b> Peserta PPDB Online 2021</h2><br>
        </div>
        <div class="uk-container">
            <div class="uk-child-width-1-2@m uk-grid-match- uk-grid-small" data-uk-grid>
                <div>
                    <div class="uk-card uk-card uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                        <a class="uk-position-cover" data-toggle="modal" data-target="#syarat"></a>
                        <div class="uk-grid-small" data-uk-grid>
                            <div class="uk-width-auto uk-text-warning uk-flex uk-flex-middle">
                                <span data-uk-icon="icon: settings; ratio: 2.6"></span>
                            </div>
                            <div class="uk-width-expand">
                                <div class="card-heading">
                                    <h3 class="uk-text-success"><b>Syarat Pendaftaran</b></h3>
                                    <p style="color: grey;">Syarat & Ketentuan pendaftaran yang harus dipenuhi calon peserta PPDB Online 2021.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                        <a class="uk-position-cover" data-toggle="modal" data-target="#jadwal"></a>
                        <div class="uk-grid-small" data-uk-grid>
                            <div class="uk-width-auto uk-text-warning uk-flex uk-flex-middle">
                                <span data-uk-icon="icon: credit-card; ratio: 2.6"></span>
                            </div>
                            <div class="uk-width-expand">
                                <div class="card-heading">
                                    <h3 class="uk-text-success"><b>Jadwal Pendaftaran</b></h3>
                                    <p style="color: grey;">Jadwal pendaftaran serangkaian pelaksanaan PPDB Online 2021 secara lengkap.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                        <a class="uk-position-cover" data-toggle="modal" data-target="#download"></a>
                        <div class="uk-grid-small" data-uk-grid>
                            <div class="uk-width-auto uk-text-warning uk-flex uk-flex-middle">
                                <span data-uk-icon="icon: download; ratio: 2.6"></span>
                            </div>
                            <div class="uk-width-expand">
                                <div class="card-heading">
                                    <h3 class="uk-text-success"><b>Download Panduan</b></h3>
                                    <p style="color: grey;">Unduh panduan lengkap cara Pendaftaran PPDB Online 2021.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                        <a class="uk-position-cover" data-toggle="modal" data-target="#kontak"></a>
                        <div class="card" data-uk-grid>
                            <div class="uk-width-auto uk-text-warning uk-flex uk-flex-middle">
                                <span data-uk-icon="icon: mail; ratio: 2.6"></span>
                            </div>
                            <div class="uk-width-expand">
                                <div class="card-heading">
                                    <h3 class="uk-text-success"><b>Kontak Kami</b></h3>
                                    <p style="color: grey;">Pelayanan informasi PPDB Online 2021 sesuai jadwal yang berlaku.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $date = date('d-m-Y');
    if ($date < '18-01-2021') { ?>

        <div class="uk-section uk-section-muted">
            <div class="uk-container uk-container-small" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                <h2 class="uk-text-center"><b>Informasi Pendaftaran!</b></h2>
                <h4 align="center" style="color: grey;"> Pendaftaran PPDB Online dibuka mulai <b>Senin, 18 Januari 2021</b></h4>
                <div class="uk-margin-medium-top uk-text-center" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                    <button class="btn btn-warning" disabled><b>PENDAFTARAN BELUM DIBUKA</b></button>
                </div>
            </div>
        </div>

    <?php } elseif ($date > '18-01-2021' && $date < '22-01-2021') { ?>

        <div class="uk-section uk-section-muted">
            <div class="uk-container uk-container-small" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                <h2 class="uk-text-center"><b>Silahkan Daftar Disini!</b></h2>
                <h4 align="center" style="color: grey;"> Pendaftaran PPDB Online dibuka <br> <b>Senin, 18 Januari 2021 - Jumat, 22 Januari 2021</b></h4>
                <div class="uk-margin-medium-top uk-text-center" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                    <a class="btn btn-success" href="<?= base_url('login'); ?>"><b>PENDAFTARAN DIBUKA</b></a>
                </div>
            </div>
        </div>

    <?php } elseif ($date > '22-01-2021') { ?>

        <div class="uk-section uk-section-muted">
            <div class="uk-container uk-container-small" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                <h2 class="uk-text-center"><b>Informasi Pendaftaran!</b></h2>
                <h4 align="center" style="color: grey;"> Pendaftaran PPDB Online telah ditutup <b>Sabtu, 23 Januari 2021</b></h4>
                <div class="uk-margin-medium-top uk-text-center" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                    <button class="btn btn-danger" disabled> <b>PENDAFTARAN DITUTUP</b> </button>
                </div>
            </div>
        </div>

    <?php } ?>

    <div class="uk-section uk-section-muted">
        <div class="uk-container">

            <div class="uk-margin-medium-top uk-flex-center uk-text-center uk-margin-medium-top uk-grid-small" data-uk-grid data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                <div>
                    <div class="uk-card">
                        <img class="uk-avatar uk-border" src="<?= base_url() ?>/public/landing/images/ypbk1.png" alt="Evan Wells" />

                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <img class="uk-avatar uk-border" src="<?= base_url() ?>/public/landing/images/paud.png" alt="Evan Wells" />

                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <img class="uk-avatar uk-border" src="<?= base_url() ?>/public/landing/images/sdut1.png" alt="John Brown" />

                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <img class="uk-avatar uk-border" src="<?= base_url() ?>/public/landing/images/tpq3.png" alt="Sara Galen" />

                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <img class="uk-avatar uk-border" src="<?= base_url() ?>/public/landing/images/smput1.png" alt="Alex Koch" />

                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <img class="uk-avatar uk-border" src="<?= base_url() ?>/public/landing/images/boarding2.png" alt="John Brown" />

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="modal fade" id="syarat" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title"><b>Syarat Pendaftaran</b></h3>
                    </div>
                    <div class="modal-body"> <br>
                        <ul class="list-group">
                            <li class="list-group-item"> 1. Mengisi Formulir Pendaftaran Online.</li>
                            <li class="list-group-item"> 2. Scan Asli Akta Kelahiran Asli.</li>
                            <li class="list-group-item"> 3. Scan Asli Kartu Keluarga.</li>
                            <li class="list-group-item"> 4. Scan Asli KTP Orang Tua & Wali.</li>
                            <li class="list-group-item"> 5. Foto Terbaru Background Merah.</li>
                            <li class="list-group-item"> 6. Foto Bukti Pembayaran.</li>
                            <li class="list-group-item"> 7. Usia 6 Tahun terhitung <b>01 Juli 2021</b>.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="modal fade" id="jadwal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title"><b>Jadwal Pendaftaran</b></h3>
                    </div>
                    <div class="modal-body">
                        <h4><b>Jadwal Pendaftaran</b></h4>
                        18 Januari 2021 - 22 Januari 2021

                        <h4><b>Jadwal Pelayanan</b></h4>
                        Senin - Jumat | Pukul 08.00 - 12.00 WIB
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="modal fade" id="download" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title"><b>Panduan Online</b></h3>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            <li class="list-group-item"> <b>Langkah (1.)</b> Mendaftar di akun PPDB Online menggunakan NISN.</li>
                            <li class="list-group-item"> <b>Langkah (2.)</b> Login Akun -> Menu Pendaftaran -> Form Daftar.</li>
                            <li class="list-group-item"> <b>Langkah (3.)</b> Isi semua inputan pendaftaran.</li>
                            <li class="list-group-item"> <b>Langkah (4.)</b> Setelah 4 langkah pendaftaran selesai.</li>
                            <li class="list-group-item"> <b>Langkah (5.)</b> Menu Status akan muncul -> Klik Menu Status.</li>
                            <li class="list-group-item"> <b>Langkah (6.)</b> Jika pendaftaran sudah di verifikasi -> Cetak Kartu Pendafataran.</li>
                            <li class="list-group-item"> <b>Langkah (7.)</b><b> Jangan Lupa !</b> Kartu Pendafataran dibawa saat Tes.</li>
                            <li class="list-group-item"> <b>Langkah (8.)</b> Tunggu jadwal tes di Menu Jadwal Tes.</li>
                            <li class="list-group-item"> <b>Langkah (9.)</b> Hasil akan muncul di Menu Pendaftaran -> Hasil Tes.</li>
                        </ul>
                        <div align="center">
                            <a href="<?= base_url(); ?>/pendaftaran/printpdf" target="_blank" class="btn btn-addon btn-warning waves-effect"><i class="fa fa-file-pdf-o"></i> Download Panduan PDF</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="modal fade" id="kontak" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title"><b>Kontak Kami</b></h3>
                    </div>
                    <div class="modal-body">
                        <h4><b>Whatsapp Only</b></h4>
                        <b>Pak Izzudin</b> | 0857-4084-5424 <br>
                        <b>Pak Anam</b> | 0895-3396-17356
                        <hr>

                        <h4><b>Transfer Bank</b></h4>
                        Bank JATENG. <b>an. SDUT BUMI KARTINI</b> <br>
                        No. Rekening | 3-015-1184-5
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="uk-section uk-text-center uk-text-muted">
        <div class="uk-container uk-container-small uk-link-muted">
            <div class="uk-text-warning uk-link-muted">

                <table align="center">
                    <tr>
                        <td width="20%"><a href="#">Persyaratan</a></td>
                        <td width="20%"><a href="#">Jadwal</a></td>
                        <td width="20%"><a href="#">Panduan</a< /td>
                        <td width="20%"><a href="#">Kontak Kami</a></td>
                    </tr>
                </table>
            </div>
            <div class="uk-margin-medium">
                <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
                    <div class="uk-first-column">
                        <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link uk-icon" target="_blank"></a>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon" target="_blank"></a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon" target="_blank"></a>
                    </div>
                    <div>
                        <a href="https://vimeo.com/" data-uk-icon="icon: youtube" class="uk-icon-link uk-icon" target="_blank"></a>
                    </div>
                </div>
            </div>
            <div class="text-default">&copy; Copyright. Sekolah Bumi Kartini Jepara. 2021</div>
        </div>
    </footer>

    <script src="<?= base_url() ?>/public/landing/js/awesomplete.js"></script>
    <script src="<?= base_url() ?>/public/landing/js/custom.js"></script>

    <script src="<?= base_url() ?>/public/template/libs/jquery/jquery/dist/jquery.js"></script>
    <script src="<?= base_url() ?>/public/template/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>

    <script src="<?= base_url() ?>/public/template/libs/jquery/jquery/dist/jquery.js"></script>
    <script src="<?= base_url() ?>/public/template/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/public/template/libs/jquery/waves/dist/waves.js"></script>

    <script src="<?= base_url() ?>/public/template/scripts/ui-load.js"></script>
    <script src="<?= base_url() ?>/public/template/scripts/ui-jp.config.js"></script>
    <script src="<?= base_url() ?>/public/template/scripts/ui-jp.js"></script>
    <script src="<?= base_url() ?>/public/template/scripts/ui-nav.js"></script>
    <script src="<?= base_url() ?>/public/template/scripts/ui-toggle.js"></script>
    <script src="<?= base_url() ?>/public/template/scripts/ui-form.js"></script>
    <script src="<?= base_url() ?>/public/template/scripts/ui-waves.js"></script>
    <script src="<?= base_url() ?>/public/template/scripts/ui-client.js"></script>
    <script src="<?= base_url() ?>/public/landing/dist/sweetalert2.all.min.js"></script>

</body>

</html>