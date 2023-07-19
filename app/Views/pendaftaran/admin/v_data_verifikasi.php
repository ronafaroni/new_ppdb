<div class="card-heading">
    <h2>Hasil Tes Peserta PPDB</h2>
    <small>Informasi yang dicantumkan mutlak keputusan panitia.</small>
</div>

<div class="col-md-12">
    <div class="card">
        <br>
        <div class="panel-body">
            <h4 align="center"><b>VERIFIKASI DATA AKUN</b></h4>
            <h4 align="center"> PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</h4>

            <br>

            <div class="table-responsive">
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
                <table id="example2" class="table table-striped table-bordered" class="display" style="width:100%">

                    <thead>
                        <tr>
                            <th><b>NO.</b></th>
                            <th><b>NO. PENDAFTARAN</b></th>
                            <th><b>NAMA LENGKAP</b></th>
                            <th><b>KK</b></th>
                            <th><b>AKTA</b></th>
                            <th><b>KTP</b></th>
                            <th><b>FOTO</b></th>
                            <th><b>PEMBAYARAN</b></th>
                            <th><b>STATUS</b></th>
                            <th><b>ACTION</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($berkasku)) {
                            $no = 1;
                            foreach ($berkasku as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['no_pendaftaran'] ?></td>
                                    <td><?= $value['nama_peserta'] ?> </td>
                                    <td>
                                        <?php
                                        $cek = $value['id_berkas'];
                                        if ($cek > ' ') {
                                            echo '<a class="btn btn-success btn-sm" href="' . base_url() . '/pendaftaran/download_kk/' . $cek . '"><i class="fa fa-download"></i></a>';
                                            echo ' <a class="btn btn-warning btn-sm" id="' . $value['foto_kk'] . '"><i class="fa  fa-eye"></i></a>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $cek = $value['id_berkas'];
                                        if ($cek > ' ') {
                                            echo '<a class="btn btn-success btn-sm" href="' . base_url() . '/pendaftaran/download_akta/' . $cek . '"><i class="fa fa-download"></i></a>';
                                            echo ' <a class="btn btn-warning btn-sm" id="' . $value['foto_akta'] . '"><i class="fa  fa-eye"></i></a>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $cek = $value['id_berkas'];
                                        if ($cek > ' ') {
                                            echo '<a class="btn btn-success btn-sm" href="' . base_url() . '/pendaftaran/download_ortu/' . $cek . '"><i class="fa fa-download"></i></a>';
                                            echo ' <a class="btn btn-warning btn-sm" id="' . $value['foto_ktp_ortu'] . '"><i class="fa  fa-eye"></i></a>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $cek = $value['id_berkas'];
                                        if ($cek > ' ') {
                                            echo '<a class="btn btn-success btn-sm" href="' . base_url() . '/pendaftaran/download_siswa/' . $cek . '"><i class="fa fa-download"></i></a>';
                                            echo ' <a class="btn btn-warning btn-sm" id="' . $value['foto_siswa'] . '"><i class="fa  fa-eye"></i></a>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $cek = $value['id_berkas'];
                                        if ($cek > ' ') {
                                            echo '<a class="btn btn-success btn-sm" href="' . base_url() . '/pendaftaran/download_bayar/' . $cek . '"><i class="fa fa-download"></i></a>';
                                            echo ' <a class="btn btn-warning btn-sm" id="' . $value['foto_bayar'] . '"><i class="fa  fa-eye"></i></a>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $cek = $value['status_pengajuan'];
                                        if ($cek < ' ') {
                                            echo "<b>MENUNGGU</b>";
                                        } else {
                                            echo $value['status_pengajuan'];
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $cek = $value['status_pengajuan'];
                                        if ($cek < ' ') {
                                            echo '<a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#edit' . $value['id_berkas'] . '"> KONFIRMASI</a>';
                                        } else {
                                            echo '<a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit' . $value['id_berkas'] . '"> TERKONFIRMASI</a>';
                                        }

                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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

        </div>

        <br>
    </div>

</div>
</div>


<?php $no = 1;
foreach ($berkasku as $key => $value) { ?>
    <div class="container">
        <div class="modal fade" id="edit<?= $value['id_berkas'] ?>" role="dialog">
            <div class="modal-dialog">
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-white">
                            <h3>Reset Password</h3>
                            <small>Masukan password baru akun anda.</small>
                        </div>
                        <div class="card-body">

                            <form action="<?= base_url('pendaftaran/konfirmasi/' . $value['id_berkas']); ?>" method="post">
                                <input type="hidden" name="id" class="form-control" value="<?= $value['id_berkas'] ?>">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No. Pendaftaran</label>
                                            <input type="text" name="no_pendaftaran" class="form-control" autocomplete="off" value="<?= $value['no_pendaftaran'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">NAMA</label>
                                            <input type="text" name="nama_users" class="form-control" autocomplete="off" value="<?= $value['nama_peserta'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Konfirmasi</label>
                                            <select class="form-control" name="konfirmasi" id="" autocomplete="off">
                                                <option value=" "> </option>
                                                <option value="DITOLAK">01. Ditolak</option>
                                                <option value="MENUNGGU">02. Menunggu</option>
                                                <option value="DITERIMA">03. Diterima</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Catatan</label>
                                            <textarea name="catatan" id="" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-addon btn-primary waves-effect"><i class="fa fa-refresh"></i>Konfirmasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);
</script>

<?php
foreach ($berkasku as $key => $value) { ?>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            document.getElementById('<?= $value['foto_kk'] ?>').addEventListener('click', function() {
                var image = new Image();

                image.src = '<?= base_url() ?>/public/uploads/<?= $value['foto_kk'] ?>';

                var viewer = new Viewer(image, {
                    hidden: function() {
                        viewer.destroy();
                    },
                });

                // image.click();
                viewer.show();
            });
        });
    </script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            document.getElementById('<?= $value['foto_akta'] ?>').addEventListener('click', function() {
                var image = new Image();

                image.src = '<?= base_url() ?>/public/uploads/<?= $value['foto_akta'] ?>';

                var viewer = new Viewer(image, {
                    hidden: function() {
                        viewer.destroy();
                    },
                });

                // image.click();
                viewer.show();
            });
        });
    </script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            document.getElementById('<?= $value['foto_ktp_ortu'] ?>').addEventListener('click', function() {
                var image = new Image();

                image.src = '<?= base_url() ?>/public/uploads/<?= $value['foto_ktp_ortu'] ?>';

                var viewer = new Viewer(image, {
                    hidden: function() {
                        viewer.destroy();
                    },
                });

                // image.click();
                viewer.show();
            });
        });
    </script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            document.getElementById('<?= $value['foto_siswa'] ?>').addEventListener('click', function() {
                var image = new Image();

                image.src = '<?= base_url() ?>/public/uploads/<?= $value['foto_siswa'] ?>';

                var viewer = new Viewer(image, {
                    hidden: function() {
                        viewer.destroy();
                    },
                });

                // image.click();
                viewer.show();
            });
        });
    </script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            document.getElementById('<?= $value['foto_bayar'] ?>').addEventListener('click', function() {
                var image = new Image();

                image.src = '<?= base_url() ?>/public/uploads/<?= $value['foto_bayar'] ?>';

                var viewer = new Viewer(image, {
                    hidden: function() {
                        viewer.destroy();
                    },
                });

                // image.click();
                viewer.show();
            });
        });
    </script>

<?php } ?>