<div class="card-heading">
    <h2>Hasil Tes Peserta PPDB</h2>
    <small>Informasi yang dicantumkan mutlak keputusan panitia.</small>
</div>

<div class="col-md-12">
    <div class="card">
        <br>
        <div class="panel-body">
            <h4 align="center"><b>DETAIL DATA PESERTA</b></h4>
            <h4 align="center"> PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</h4>

            <br>

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" class="display" style="width:100%">

                    <thead>
                        <tr>
                            <th><b>NO.</b></th>
                            <th><b>NO. PENDAFTARAN</b></th>
                            <th><b>NAMA LENGKAP</b></th>
                            <th><b>DATA PENDAFTAR</b></th>
                            <th><b>DATA ORTU & WALI</b></th>
                            <th><b>DATA PERIODIK</b></th>
                            <th><b>DATA PEMBERKASAN</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($daftar)) {
                            $no = 1;
                            foreach ($daftar as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['no_pendaftaran'] ?></td>
                                    <td><?= $value['nama_peserta'] ?></td>
                                    <td>
                                        <?php
                                        $cek = $value['id_pendaftaran'];
                                        if ($cek < ' ') {
                                            echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                        } else {
                                            echo ('<span class="text-success"><i class="icon mdi-navigation-check i-20"></i> SUDAH MENGIRIMKAN</span>');
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $cek = $value['id_orangtua'];
                                        if ($cek < ' ') {
                                            echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                        } else {
                                            echo ('<span class="text-success"><i class="icon mdi-navigation-check i-20"></i> SUDAH MENGIRIMKAN</span>');
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $cek = $value['id_orangtua'];
                                        if ($cek < ' ') {
                                            echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                        } else {
                                            echo ('<span class="text-success"><i class="icon mdi-navigation-check i-20"></i> SUDAH MENGIRIMKAN</span>');
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $cek = $value['id_berkas'];
                                        if ($cek < ' ') {
                                            echo ('<span class="text-danger"><i class="icon mdi-navigation-close i-20"></i> BELUM MENGIRIMKAN</span>');
                                        } else {
                                            echo ('<span class="text-success"><i class="icon mdi-navigation-check i-20"></i> SUDAH MENGIRIMKAN</span>');
                                        }

                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td>

                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
            <!-- <div class="alert alert-warning">
                <h5><b>Assalamualaikum Ayah & Bunda,</b></h5><br>
                <p align="justify">Kemarin kakak sangat luar biasa dalam mengikuti serangkaian tes. Kakak tampil berani sekali, tapi kakak masih perlu belajar lagi ya bunda agar lebih mahir lagi dalam baca tulis. Semoga kakak tetap semangat dan jadi orang hebat.</p><br>
                Salam Hangat <b>Panitia PPDB.</b>
            </div> -->

            <br>
        </div>

    </div>
</div>