<div class="card-heading">
    <h2>Reset Password Peserta</h2>
    <small>Informasi tindakan reset password data pengguna.</small>
</div>

<div class="col-md-12">
    <div class="card">
        <br>
        <div class="panel-body">
            <h4 align="center"><b>DATA KELOLA AKUN</b></h4>
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

                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td><b>NO.</b></td>
                            <td><b>NO. IDENTITAS</b></td>
                            <td><b>PASSWORD</b></td>
                            <td><b>NAMA AKUN</b></td>
                            <td><b>TANGGAL DAFTAR</b></td>
                            <td><b>ACTION</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($users)) {
                            $no = 1;
                            foreach ($users as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['no_id'] ?></td>
                                    <td><?= md5($value['password']) ?></td>
                                    <td><?= $value['nama_users'] ?></td>
                                    <td><?= $value['tgl_update'] ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>/users/reset/<?= $value['id_users'] ?>" class="btn btn-addon btn-success btn-sm waves-effect" data-toggle="modal" data-target="#edit<?= $value['id_users'] ?>"><i class="fa fa-cog"></i></span> RESET PASSWORD</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" align="center">
                                    Data tidak ditemukan.
                                </td>
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

<?php $no = 1;
foreach ($users as $key => $value) { ?>
    <div class="container">
        <div class="modal fade" id="edit<?= $value['id_users'] ?>" role="dialog">
            <div class="modal-dialog">
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-white">
                            <h3><b>Reset Password</b></h3>
                            <small>Masukan password baru akun anda.</small>
                        </div>
                        <div class="card-body">

                            <form action="<?= base_url('users/update/' . $value['id_users']); ?>" method="post">
                                <input type="hidden" name="id" class="form-control" value="<?= $value['id_users'] ?>">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">NISN</label>
                                            <input type="text" name="no_nisn" class="form-control" autocomplete="off" value="<?= $value['no_id'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">NAMA</label>
                                            <input type="text" name="nama_users" class="form-control" autocomplete="off" value="<?= $value['nama_users'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Reset Password</label>
                                            <input type="password" name="password" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-addon btn-primary waves-effect"><i class="fa fa-refresh"></i>Reset Data</button>
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