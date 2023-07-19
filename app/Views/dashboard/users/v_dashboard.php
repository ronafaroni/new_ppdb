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
                            <td> No. Identitas</td>
                            <td> : <b><?= session()->get('no_id'); ?></b></td>
                        </tr>
                        <tr>
                            <td> Nama Peserta</td>
                            <td> : <b><?= session()->get('nama_users'); ?></b></td>
                        </tr>
                        <tr>
                            <td> Umur per 01 Juli 2021</td>
                            <td> : <b>
                                    <?php
                                    // tanggal lahir
                                    $tanggal = new DateTime(session()->get('tgl_lahir'));

                                    // tanggal hari ini
                                    $today = new DateTime('2021-07-01');

                                    // tahun
                                    $y = $today->diff($tanggal)->y;

                                    // bulan
                                    $m = $today->diff($tanggal)->m;

                                    // hari
                                    $d = $today->diff($tanggal)->d;
                                    echo $y . " Tahun " . $m . " Bulan " . $d . " Hari";
                                    ?>
                                </b>
                            </td>
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
                            <td> :<b>
                                    <?php

                                    if (!empty($konfirmasi)) {
                                        foreach ($konfirmasi as $key => $value) {

                                            $cek = $value['status_pengajuan'];
                                            if ($cek > ' ') {
                                                echo $value['status_pengajuan'];
                                            } else {
                                                echo "MENUNGGU";
                                            }
                                        }
                                    } else {
                                        echo ('MENUNGGU KONFIRMASI');
                                    }

                                    ?>
                                </b>
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

                                        $cek = $value['no_id'];
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

                                        $cek = $value['no_id'];
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

                                        $cek = $value['no_id'];
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

                                        $cek = $value['no_id'];
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

            </div>
        </div>
    </div>
</div>