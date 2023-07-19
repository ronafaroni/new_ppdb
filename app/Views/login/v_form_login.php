<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">

    <title>Login | PPDB Online 2021</title>

    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/imgs/logo-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/imgs/logo-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/template//login/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/template/login/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/template/login/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/template/login/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/template/login/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/template/login/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/template/login/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/template/login/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/template/login/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/template/login/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

    <img src="<?= base_url(); ?>/public/template/login/images/pages/login.jpg" id="bg" alt="" style="position:fixed; top:0; left:0; min-width:100%; min-height:100%;">

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="<?= base_url(); ?>/public/template/login/images/pages/login.png" alt="branding logo">
                                </div>
                                <br>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h2 class="mb-0"><b>Selamat Datang!</b></h2>
                                                <h3 class="mb-0">Peserta PPDB Online 2021</h3>
                                            </div>
                                        </div>
                                        <p class="px-2">Silahkan masukkan username dan password dengan benar!</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">

                                                <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                                                    <div class="alert alert-danger">
                                                        <?= session()->getFlashdata('gagal') ?>
                                                    </div>
                                                <?php } ?>

                                                <?php if (!empty(session()->getFlashdata('success'))) { ?>
                                                    <div class="alert alert-success">
                                                        <?= session()->getFlashdata('success') ?>
                                                    </div>
                                                <?php } ?>

                                                <?php
                                                $input = session()->getFlashdata('inputs');
                                                $errors = session()->getFlashdata('errors');
                                                if (!empty($errors)) { ?>
                                                    <div class="alert alert-danger">
                                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                        Ada kesalahan saat login :
                                                        <ul>
                                                            <?php foreach ($errors as $error) { ?>
                                                                <li><?= esc($error) ?></li>

                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                <?php } ?>

                                                <form action="<?= base_url(); ?>/login/cek_login" method="post">
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" name="username" class="form-control" id="user-name" placeholder="Nomor Handphone" autocomplete="off">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="user-name">Nomor Handphone</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" name="password" class="form-control" id="user-password" placeholder="Password" autocomplete="off">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                    </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="text-right"><a href="<?= base_url(); ?>/login/registrasi" class="card-link">Silahkan daftar disini ?</a></div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary float-left btn-inline">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="login-footer">
                                            <div class="divider">
                                                <div class="divider-text">Supported by</div>
                                            </div>
                                            <div class="footer-btn d-inline">
                                                <p align="center"><small class="text-light">&copy; Copyright. Sekolah Bumi Kartini Jepara. 2021</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url(); ?>/public/template/login/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url(); ?>/public/template/login/js/core/app-menu.js"></script>
    <script src="<?= base_url(); ?>/public/template/login/js/core/app.js"></script>
    <script src="<?= base_url(); ?>/public/template/login/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(300, 0).slideUp(300, function() {
                $(this).remove();
            });
        }, 4000);
    </script>

</body>
<!-- END: Body-->

</html>