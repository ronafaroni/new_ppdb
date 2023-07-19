<div class="card-heading">
    <h2>Dashboad PPDB</h2>
    <small>Penerimaan Peserta Didik Baru (PPDB).</small>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="panel-body">
                <h3><b>Identitas Pendaftar PPDB</b></h3>
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td> No. NISN</td>
                            <td> : <b><?= session()->get('no_nisn'); ?></b></td>

                        </tr>
                        <tr>
                            <td> Nama Peserta</td>
                            <td> : <b><?= session()->get('nama_users'); ?></b></td>

                        </tr>
                        <tr>
                            <td> Tgl. Daftar</td>
                            <td> : <?= session()->get('tgl_update'); ?></td>

                        </tr>
                        <tr>
                            <td> Browser</td>
                            <td> : <?= $browser; ?></td>

                        </tr>
                        <tr>
                            <td> IP. Address</td>
                            <td> : <?= $ip; ?></td>

                        </tr>
                        <tr>
                            <td> Sistem Operasi</td>
                            <td> : <?= $os; ?></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="panel-body">
                <h3><b>Status Pendaftar</b></h3>
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <td> Status</td>
                            <td> :
                                <?php

                                if (!empty($daftar)) {
                                    foreach ($daftar as $key => $value) {

                                        $cek = $value['no_nisn'];
                                        if ($cek < ' ') {
                                            echo ('<b>MENUNGGU KONFIRMASI</b>');
                                        } else {
                                            echo ('<b>PENDAFTARAN DITERIMA</b>');
                                        }
                                    }
                                } else {
                                    echo ('<b>MENUNGGU KONFIRMASI</b>');
                                }

                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>No. Registrasi</td>
                            <td> : <b>
                                    <?php

                                    if (!empty($daftar)) {
                                        foreach ($daftar as $key => $value) {

                                            $cek = $value['no_pendaftaran'];
                                            if ($cek < ' ') {
                                                echo ('<b>BELUM REGISTRASI</b>');
                                            } else {
                                                echo $value['no_pendaftaran'];
                                            }
                                        }
                                    } else {
                                        echo ('<b>BELUM REGISTRASI</b>');
                                    }

                                    ?>
                                </b>
                            </td>
                        </tr>

                        <tr>
                            <td> Data Peserta PPDB</td>
                            <td>
                                <?php
                                if (!empty($daftar)) {
                                    foreach ($daftar as $key => $value) {

                                        $cek = $value['no_nisn'];
                                        if ($cek < ' ') {
                                            echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                        } else {
                                            echo ('<span class="text-success"><i class="icon mdi-navigation-check i-20"></i> SUDAH MENGIRIMKAN</span>');
                                        }
                                    }
                                } else {
                                    echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                }

                                ?>
                            </td>

                        </tr>
                        <tr>
                            <td> Data Orang Tua & Wali</td>
                            <td>
                                <?php
                                if (!empty($ortu)) {
                                    foreach ($ortu as $key => $value) {

                                        $cek = $value['no_nisn'];
                                        if ($cek < ' ') {
                                            echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                        } else {
                                            echo ('<span class="text-success"><i class="icon mdi-navigation-check i-20"></i> SUDAH MENGIRIMKAN</span>');
                                        }
                                    }
                                } else {
                                    echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                }

                                ?>
                            </td>

                        </tr>
                        <tr>
                            <td> Data Periodik</td>
                            <td>
                                <?php
                                if (!empty($periodik)) {
                                    foreach ($periodik as $key => $value) {

                                        $cek = $value['no_nisn'];
                                        if ($cek < ' ') {
                                            echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                        } else {
                                            echo ('<span class="text-success"><i class="icon mdi-navigation-check i-20"></i> SUDAH MENGIRIMKAN</span>');
                                        }
                                    }
                                } else {
                                    echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                }

                                ?>
                            </td>

                        </tr>
                        <tr>
                            <td> Data Pemberkasan</td>
                            <td>
                                <?php
                                if (!empty($berkas)) {
                                    foreach ($berkas as $key => $value) {

                                        $cek = $value['no_nisn'];
                                        if ($cek < ' ') {
                                            echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                        } else {
                                            echo ('<span class="text-success"><i class="icon mdi-navigation-check i-20"></i> SUDAH MENGIRIMKAN</span>');
                                        }
                                    }
                                } else {
                                    echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                }

                                ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <!-- <div align="center">
                    <a href="<?= base_url(); ?>/pendaftaran/printpdf" target="_blank" class="btn btn-addon btn-warning waves-effect"><i class="fa fa-file-pdf-o"></i> Download & Print PDF</a>
                </div> -->
            </div>
        </div>
    </div>
</div>