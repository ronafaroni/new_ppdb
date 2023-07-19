<!-- aside -->
<aside id="aside" class="app-aside modal fade " role="menu">
    <div class="left">
        <div class="box bg-white">
            <div class="navbar md-whiteframe-z1 no-radius blue">
                <!-- brand -->
                <a class="navbar-brand">
                    <img src="images/logo.png" alt="." style="max-height: 36px; display:none">
                    <span class="hidden-folded m-l inline">PPDB Online 2021</span>
                </a>
                <!-- / brand -->
            </div>
            <div class="box-row">
                <div class="box-cell scrollable hover">
                    <div class="box-inner">
                        <div class="p hidden-folded blue-50" style="background-image:url(<?= base_url(); ?>/public/template/images/profile_bg.png); background-size:cover">
                            <div class="rounded w-64 bg-white inline pos-rlt">
                                <img src="<?= base_url() ?>/public/template/images/avatar1.png" class="img-responsive rounded">
                            </div>
                            <a class="block m-t-sm" ui-toggle-class="hide, show" target="#nav, #account">
                                <span class="block font-bold"><?= session()->get('nama_users'); ?></span>
                                <span class="pull-right auto">
                                    <i class="fa inline fa-caret-down"></i>
                                    <i class="fa none fa-caret-up"></i>
                                </span>
                                <?= session()->get('username'); ?>
                            </a>
                        </div>
                        <div id="nav">
                            <nav ui-nav>
                                <ul class="nav">
                                    <li class="nav-header m-v-sm hidden-folded">
                                        UI Kits
                                    </li>

                                    <li>
                                        <a md-ink-ripple href="<?= base_url('dashboard/admin'); ?>">
                                            <i class="pull-right up"><b class="label no-bg"></b></i>
                                            <i class="icon mdi-action-dashboard i-20"></i>
                                            <span class="font-normal">Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="icon mdi-action-account-box i-20"></i>
                                            <span class="font-normal">Manajemen Users</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('users/data_users'); ?>">Data Users</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('users/riset_users'); ?>">Reset Password</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="icon mdi-hardware-desktop-windows i-20"></i>
                                            <span class="font-normal">Pendaftaran</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('pendaftaran/data_pendaftaran'); ?>">Data Pendaftaran</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('pendaftaran/data_detail'); ?>">Status Pendaftar</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('pendaftaran/data_verifikasi'); ?>">Verifikasi</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a md-ink-ripple>
                                            <span class="pull-right text-muted">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                            <i class="icon mdi-action-today i-20"></i>
                                            <span class="font-normal">Penjadwalan</span>
                                        </a>
                                        <ul class="nav nav-sub">
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('jadwal/import_jadwal'); ?>">Import Jadwal</a>
                                            </li>
                                            <li>
                                                <a md-ink-ripple href="<?= base_url('jadwal/import_hasil_tes'); ?>">Hasil Assesmen</a>
                                            </li>
                                            <!-- <li>
                                                <a md-ink-ripple href="<?= base_url('pendaftaran/data_verifikasi'); ?>">Informasi</a>
                                            </li> -->
                                        </ul>
                                    </li>

                                    <!-- <li>
                                        <a md-ink-ripple href="ui.chart.html">
                                            <i class="pull-right up"></i>
                                            <i class="icon mdi-action-info-outline i-20"></i>
                                            <span class="font-normal">Informasi PPDB</span>
                                        </a>
                                    </li> -->

                                    <li class="b-b b m-v-sm"></li>

                                    <li>
                                        <a md-ink-ripple href="#">
                                            <span>Panduan Aplikasi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a md-ink-ripple href="#">
                                            <span>Version v1.0.2</span>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div id="account" class="hide m-v-xs">
                            <nav>
                                <ul class="nav">
                                    <li>
                                        <a md-ink-ripple href="page.profile.html">
                                            <i class="icon mdi-action-perm-contact-cal i-20"></i>
                                            <span>My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a md-ink-ripple href="page.settings.html">
                                            <i class="icon mdi-action-settings i-20"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a md-ink-ripple href="lockme.html">
                                            <i class="icon mdi-action-exit-to-app i-20"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                    <li class="m-v-sm b-b b"></li>
                                    <li>
                                        <div class="nav-item" ui-toggle-class="folded" target="#aside">
                                            <label class="md-check">
                                                <input type="checkbox">
                                                <i class="purple no-icon"></i>
                                                <span class="hidden-folded">Folded aside</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <ul class="nav b-t b">
                    <li>
                        <a md-ink-ripple href="<?= base_url('login/logout'); ?>">
                            <i class="pull-right up"></i>
                            <i class="icon mdi-action-exit-to-app i-20"></i>
                            <span class="font-normal">Keluar</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>
<!-- / aside -->