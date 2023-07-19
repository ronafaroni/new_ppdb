<div class="card-heading">
    <h2>Form Pendaftaran Peserta PPDB</h2>
    <small>Pastikan data yang dimasukan adalah data yang benar.</small>
</div>
<div class="col-md-12">
    <div class="card">
        <br>

        <div class="panel-body">

            <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('gagal') ?>
                </div>
            <?php } ?>



            <?php if (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php } ?>


            <?php
            $input = session()->getFlashdata('inputs');
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger" close>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Ada kesalahan saat input data :
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?= esc($error) ?></li>

                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

            <form role="form" action="<?= base_url('pendaftaran/simpan_data_siswa') ?>" method="post">

                <input type="hidden" name="id" class="form-control" autocomplete="off" value="<?= session()->get('no_id'); ?>"><?= session()->get('id_users'); ?>
                <input type="hidden" name="nama_peserta" class="form-control" autocomplete="off" value="<?= session()->get('nama_users'); ?>">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Identitas</label>
                            <input type="text" class="form-control" autocomplete="off" value="<?= session()->get('no_id'); ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap *</label>
                            <input type="text" class="form-control" autocomplete="off" value="<?= session()->get('nama_users'); ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin *</label>
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki">
                                    <i class="blue"></i>
                                    Laki-laki
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="jenis_kelamin" value="Perempuan">
                                    <i class="blue"></i>
                                    Perempuan
                                </label>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir *</label>
                            <input type="text" name="tempat_lahir" class="form-control" autocomplete="off" placeholder="Masukan Tempat Lahir">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Lahir *</label>
                            <input type="text" name="tgl_lahir" id="datepicker" class="form-control" value="<?= session()->get('tgl_lahir'); ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ayah *</label>
                            <input type="text" name="nama_ayah" class="form-control" autocomplete="off" placeholder="Masukan Nama Ayah">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Ibu *</label>
                            <input type="text" name="nama_ibu" class="form-control" autocomplete="off" placeholder="Masukan Nama Ibu">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nomor Telp. *</label>
                            <input type="number" name="nomor" class="form-control" autocomplete="off" placeholder="Masukan Nomor Telp. Aktif">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat Jalan (Domisili) *</label>
                            <input type="text" name="alamat" class="form-control" autocomplete="off" placeholder="Masukan Alamat">
                            </input>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Asal TK / RA *</label>
                            <input type="text" name="asal_tk" class="form-control" autocomplete="off" placeholder="Masukan Nama TK / RA">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat TK / RA *</label>
                            <input type="text" name="alamat_tk" class="form-control" autocomplete="off" placeholder="Masukan Alamat TK / RA">
                        </div>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-addon btn-primary waves-effect"><i class="fa fa-plus"></i>Kirim Pendaftaran</button>
                <button type="reset" class="btn btn-addon btn-default waves-effect">Reset Data</button>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>