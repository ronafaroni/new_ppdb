<div class="card-heading">
    <h2>Status Peserta PPDB</h2>
    <small>Silahkan cek data kembali jika ada kesalahan.</small>
</div>

<div class="col-md-12">
    <div class="card">
        <br>
        <div class="panel-body">
            <?php
            if (!empty($statusku)) {
                foreach ($statusku as $key => $value) { ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td width="30%"><b>Status</b> </td>
                                        <td width="70%">: <b>
                                                <?php
                                                $cek = $value['status_pengajuan'];
                                                if ($cek > ' ') {
                                                    echo $value['status_pengajuan'];
                                                } else {
                                                    echo "MENUNGGU";
                                                }
                                                ?>
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">No. ID </td>
                                        <td width="70%">: <b><?= $value['no_pendaftaran']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nama</td>
                                        <td width="70%">: <b><?= $value['nama_peserta']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Unit</td>
                                        <td width="70%">: <b>SDUT BUMI KARTINI</b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Daftar</td>
                                        <td width="70%">: <b><?= $value['tgl_update']; ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                <?php } ?>

            <?php } else { ?>
                <?php foreach ($daftar as $key => $value) { ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td width="30%"><b>Status Pendaftaran</b> </td>
                                        <td width="70%">: <b> MENUNGGU

                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">No. Pendaftaran </td>
                                        <td width="70%">: <b><?= $value['no_pendaftaran']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nama Peserta</td>
                                        <td width="70%">: <b><?= $value['nama_peserta']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Unit Sekolah</td>
                                        <td width="70%">: <b>SDUT BUMI KARTINI</b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Tgl. Daftar</td>
                                        <td width="70%">: <b><?= $value['tgl_update']; ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                <?php } ?>
            <?php } ?>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Data Pemberkasan</th>
                            <th>File Berkas</th>
                            <th>Status</th>
                            <th>Detail Upload</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($berkas as $key => $value) { ?>
                            <tr>
                                <td>1.</td>
                                <td>Scan/Foto Kartu Keluarga</td>
                                <td><?= $value['foto_kk']; ?></td>
                                <td>
                                    <?php
                                    $nilai = $value['foto_kk'];
                                    if ($nilai > ' ') {
                                        echo "<p class='text-success'>Sudah Mengirim</p>";
                                    } else {
                                        echo "<p class='text-danger'>belum Mengirim</p>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>/pendaftaran/download_kk/<?= $value['id_berkas']; ?>" class="btn btn-addon btn-warning btn-sm waves-effect"><i class="fa fa-download"></i>Download</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2.</td>
                                <td>Scan/Foto Akta Kelahiran</td>
                                <td><?= $value['foto_akta']; ?></td>
                                <td>
                                    <?php
                                    $nilai = $value['foto_akta'];
                                    if ($nilai > ' ') {
                                        echo "<p class='text-success'>Sudah Mengirim</p>";
                                    } else {
                                        echo "<p class='text-danger'>belum Mengirim</p>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>/pendaftaran/download_akta/<?= $value['id_berkas']; ?>" class="btn btn-addon btn-warning btn-sm waves-effect"><i class="fa fa-download"></i>Download</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3.</td>
                                <td>Scan/Foto KTP Orang Tua</td>
                                <td><?= $value['foto_ktp_ortu']; ?></td>
                                <td>
                                    <?php
                                    $nilai = $value['foto_ktp_ortu'];
                                    if ($nilai > ' ') {
                                        echo "<p class='text-success'>Sudah Mengirim</p>";
                                    } else {
                                        echo "<p class='text-danger'>belum Mengirim</p>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>/pendaftaran/download_ortu/<?= $value['id_berkas']; ?>" class="btn btn-addon btn-warning btn-sm waves-effect"><i class="fa fa-download"></i>Download</a>
                                </td>
                            </tr>

                            <tr>
                                <td>4.</td>
                                <td>Scan/Foto Siswa Terbaru</td>
                                <td><?= $value['foto_siswa']; ?></td>
                                <td>
                                    <?php
                                    $nilai = $value['foto_siswa'];
                                    if ($nilai > ' ') {
                                        echo "<p class='text-success'>Sudah Mengirim</p>";
                                    } else {
                                        echo "<p class='text-danger'>belum Mengirim</p>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>/pendaftaran/download_siswa/<?= $value['id_berkas']; ?>" class="btn btn-addon btn-warning btn-sm waves-effect"><i class="fa fa-download"></i>Download</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Scan/Foto Bukti Pembayaran</td>
                                <td><?= $value['foto_bayar']; ?></td>
                                <td>
                                    <?php
                                    $nilai = $value['foto_bayar'];
                                    if ($nilai > ' ') {
                                        echo "<p class='text-success'>Sudah Mengirim</p>";
                                    } else {
                                        echo "<p class='text-danger'> belum Mengirim</p>";
                                    }
                                    ?>
                                </td>

                                <td>
                                    <a href="<?= base_url(); ?>/pendaftaran/download_bayar/<?= $value['id_berkas']; ?>" class="btn btn-addon btn-warning btn-sm waves-effect"><i class="fa fa-download"></i>Download</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <br>
            <div align="center">
                <a href="<?= base_url(); ?>/pendaftaran/cetakpdf" target="_blank" class="btn btn-addon btn-primary waves-effect"><i class="fa fa-file-pdf-o"></i> Download & Print PDF</a>
            </div>
            <br>
        </div>

    </div>
</div>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);
</script>