<div class="card-heading">
    <h2>Data Pemberkasan</h2>
    <small>Pastikan data terisi dengan jelas & benar.</small>
</div>
<div class="col-md-12">
    <div class="card">
        <br>

        <div class="panel-body">

            <?php if (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php } ?>


            <?php
            $input = session()->getFlashdata('inputs');
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger" close>
                    Ada kesalahan saat input data :
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?= esc($error) ?></li>

                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

            <button class="btn btn-addon btn-primary waves-effect" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i>Upload Berkas</button><br><br>
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
                        <?php foreach ($menu_berkas as $key => $value) { ?>
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

        </div>

    </div>
</div>

<div class="container">
    <div class="modal fade" id="save" role="dialog">
        <div class="modal-dialog">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading bg-white">
                        <h3>Pemberkasan</h3>
                        <small>Masukan berkas dengan benar dan jelas.</small>
                    </div>
                    <div class="card-body">
                        <?= form_open_multipart('pendaftaran/simpan_data_berkas'); ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Scan/Foto Kartu Keluarga (max. 512 kb)</label>
                                    <input type="file" name="kartu_keluarga" class="form-control" autocomplete="off" placeholder="Masukan Tinggi Badan">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Scan/Foto Akta Kelahiran (max. 1 Mb) *</label>
                                    <input type="file" name="akta_kelahiran" class="form-control" autocomplete="off" placeholder="Masukan Akta Kelahiran">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Scan/Foto KTP Orang Tua (max. 512 kb)</label>
                                    <input type="file" name="ktp_ortu" class="form-control" autocomplete="off" placeholder="Masukan Tinggi Badan">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Scan/Foto Siswa Terbaru (max. 512 kb)</label>
                                    <input type="file" name="siswa" class="form-control" autocomplete="off" placeholder="Masukan Tinggi Badan">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Scan/Foto Bukti Pembayaran (max. 1 Mb) *</label>
                                    <input type="file" name="bayar" class="form-control" autocomplete="off" placeholder="Masukan Tinggi Badan">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-addon btn-primary waves-effect"><i class="fa fa-plus"></i>Upload Pemberkasan</button>
                        <button type="reset" class="btn btn-addon btn-default waves-effect">Reset Data</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
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