<div class="card-heading">
    <h2>Data Periodik Siswa</h2>
    <small>Pastikan data yang dimasukan adalah data yang benar.</small>
</div>
<div class="col-md-12">
    <div class="card">
        <br>

        <div class="panel-body">

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

            <form role="form" action="<?= base_url('pendaftaran/simpan_data_periodik') ?>" method="post">

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tinggi Badan (Cm) *</label>
                            <input type="number" name="tinggi" class="form-control" autocomplete="off" placeholder="Masukan Tinggi Badan">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Berat Badan (Kg) *</label>
                            <input type="number" name="berat" class="form-control" autocomplete="off" placeholder="Masukan Berat Badan">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Jarak Tempuh ke Sekolah *</label>
                    <div class="row row-sm">
                        <div class="col-sm-2">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="jarak" value="Kurang dari 1 Km">
                                    <i class="blue"></i>
                                    Kurang dari 1 Km
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-2">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="jarak" value="Lebih dari 1 Km">
                                    <i class="blue"></i>
                                    Lebih dari 1 Km
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-2">
                            <p>
                                <input type="number" name="jarak_angka" class="form-control" autocomplete="off" placeholder="Masukan angka jika melebihi 1 Km">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Waktu Tempuh ke Sekolah</label>
                            <input type="number" name="waktu_tempuh_jam" class="form-control" autocomplete="off" placeholder="Masukan Jam Tempuh">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="exampleInputPassword1"></label>
                            <input type="number" name="waktu_tempuh_menit" class="form-control" autocomplete="off" placeholder="Masukan Menit Tempuh">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jumlah Saudara Kandung *</label>
                            <input type="number" name="jumlah_saudara" class="form-control" autocomplete="off" placeholder="Masukan Jumlah Saudara">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Anak Ke *</label>
                            <input type="number" name="anak_ke" class="form-control" autocomplete="off" placeholder="Masukan Urutan Anak">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telp. Rumah *</label>
                            <input type="number" name="telp" class="form-control" autocomplete="off" placeholder="Masukan No. Telp. Rumah">
                        </div>
                    </div>
                </div>

                <hr>
                <button type="submit" class="btn btn-primary m-b">Kirim Data Periodik</button>
                <button type="reset" class="btn btn-default m-b">Reset Data</button>
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
    }, 4000);
</script>