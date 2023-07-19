<div class="card-heading">
    <h2>Jadwal Peserta PPDB</h2>
    <small>Silahkan cek kembali jadwal tes anda.</small>
</div>

<div class="col-md-12">
    <div class="card">

        <div class="panel-body">

            <?php
            if (!empty($status)) { ?>

                <?php foreach ($status as $key => $value) { ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td width="30%">No. ID</td>
                                        <td width="70%">: <b><?= $value['no_pendaftaran']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nama</td>
                                        <td width="70%">: <b><?= $value['nama_peserta']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Unit</td>
                                        <td width="70%">: <b>SDUT BUMI KARTINI JEPARA</b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Tanggal</td>
                                        <td width="70%">: <b><?= $value['tgl_update']; ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>

            <?php } else { ?>

                <div class="row">
                    <div class="col-sm-6">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td width="30%">No. ID </td>
                                    <td width="70%">: - - - -</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nama</td>
                                    <td width="70%">: - - - -</td>
                                </tr>
                                tr>
                                <td width="30%">Unit</td>
                                <td width="70%">: - - - -</td>
                                </tr>
                                <tr>
                                    <td width="30%">Tanggal</td>
                                    <td width="70%">: - - - -</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            <?php } ?>


            <div class="table-responsive">
                <table class="table table-striped table-bordered">

                    <thead>
                        <tr>
                            <th><b>NO.</b></th>
                            <th><b>KETERANGAN</b></th>
                            <th><b>TANGGAL TES</b></th>
                            <th><b>WAKTU TES</b></th>
                            <th><b>RUANGAN TES</b></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (!empty($jadwal_tes)) { ?>

                            <?php foreach ($jadwal_tes as $key => $value) { ?>

                                <tr>
                                    <td>1.</td>
                                    <td><b>JADWAL TES PSIKOTES</b></td>
                                    <td><?= $value['tgl_tes_psikotes'] ?></td>
                                    <td><?= $value['waktu_tes_psikotes'] ?></td>
                                    <td><?= $value['ruangan_psikotes'] ?></td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td><b>JADWAL TES OBSERVASI</b></td>
                                    <td><?= $value['tgl_tes_observasi'] ?></td>
                                    <td><?= $value['waktu_tes_observasi'] ?></td>
                                    <td><?= $value['ruangan_observasi'] ?></td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td><b>JADWAL TES WAWANCARA</b></td>
                                    <td><?= $value['tgl_tes_wawancara'] ?></td>
                                    <td><?= $value['waktu_tes_wawancara'] ?></td>
                                    <td><?= $value['ruangan_wawancara'] ?></td>
                                </tr>


                            <?php } ?>
                        <?php } else { ?>

                            <tr>
                                <td>1.</td>
                                <td><b>JADWAL TES PSIKOTES</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>2.</td>
                                <td><b>JADWAL TES OBSERVASI</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>3.</td>
                                <td><b>JADWAL TES WAWANCARA</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div align="center">
                <a href="<?= base_url(); ?>/jadwal/jadwalpdf" target="_blank" class="btn btn-addon btn-warning waves-effect"><i class="fa fa-file-pdf-o"></i> Download & Print PDF</a>
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