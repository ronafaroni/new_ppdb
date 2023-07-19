<div class="card-heading">
    <h2>Biodata Peserta Didik</h2>
    <small>Pastikan kembali data yang dimasukan benar.</small>
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
                                        <td width="30%">No. Pendaftaran </td>
                                        <td width="70%">: <b><?= $value['no_pendaftaran']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nama Peserta</td>
                                        <td width="70%">: <b><?= $value['nama_peserta']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Unit Sekolah</td>
                                        <td width="70%">: <b>SDUT BUMI KARTINI JEPARA</b></td>
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

            <?php } else { ?>

                <div class="row">
                    <div class="col-sm-6">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td width="30%">No. Pendaftaran </td>
                                    <td width="70%">: - - - -</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nama Peserta</td>
                                    <td width="70%">: - - - -</td>
                                </tr>
                                <tr>
                                    <td width="30%">Unit Sekolah</td>
                                    <td width="70%">: - - - -</td>
                                </tr>
                                <tr>
                                    <td width="30%">Tgl. Daftar</td>
                                    <td width="70%">: - - - -</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            <?php } ?>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%"></th>
                            <th width="15%"></th>
                            <th width="65%"></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        if (!empty($status)) { ?>

                            <?php foreach ($status as $key => $value) { ?>

                                <tr>
                                    <td>1.</td>
                                    <td>No. Pendaftaran</td>
                                    <td>= <?= $value['no_pendaftaran']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Nama Peserta</td>
                                    <td>= <?= $value['nama_peserta']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Jenis Kelamin</td>
                                    <td>= <?= $value['jns_kelamin']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>4.</td>
                                    <td>Tempat, Tgl. Lahir</td>
                                    <td>= <?= $value['tempat_lahir']; ?>, <?= $value['tgl_lahir']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Nama Ayah</td>
                                    <td>= <?= $value['nama_ayah']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Nama Ibu</td>
                                    <td>= <?= $value['nama_ibu']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Alamat</td>
                                    <td>= <?= $value['alamat']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td> No. Telp</td>
                                    <td>= <?= $value['no_telp']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Asal TK / RA</td>
                                    <td>= <?= $value['asal_tk']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>10.</td>
                                    <td>Alamat TK / RA</td>
                                    <td>= <?= $value['asal_tk']; ?></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            <?php } ?>
                        <?php } else { ?>

                            <tr>
                                <td>1.</td>
                                <td>No. Pendaftaran</td>
                                <td>= -</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Nama Peserta</td>
                                <td>= -</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Jenis Kelamin</td>
                                <td>= -</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>4.</td>
                                <td>Tempat, Tgl. Lahir</td>
                                <td>= -</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Nama Ayah</td>
                                <td>= -</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Nama Ibu</td>
                                <td>= -</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>Alamat</td>
                                <td>= -</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td> No. Telp</td>
                                <td>= -</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Asal TK / RA</td>
                                <td>= -</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>10.</td>
                                <td>Alamat TK / RA</td>
                                <td>= -</td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br>

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