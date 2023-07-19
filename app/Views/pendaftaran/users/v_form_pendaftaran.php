<div class="card-heading">
    <h2>Data Peserta Didik Baru</h2>
    <small>Pastikan data yang dimasukan adalah data yang benar.</small>
</div>
<div class="col-md-12">
    <div class="card">
        <br>

        <div class="panel-body">

            <div class="col-sm-12">
                <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?= session()->getFlashdata('gagal') ?>
                    </div>
                <?php } ?>
            </div>

            <?php
            $input = session()->getFlashdata('inputs');
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger">
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

                <input type="hidden" name="nisn" class="form-control" autocomplete="off" value="<?= session()->get('no_nisn'); ?>"><?= session()->get('id_users'); ?>
                <input type="hidden" name="nama_lengkap" class="form-control" autocomplete="off" value="<?= session()->get('nama_users'); ?>">

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap *</label>
                    <input type="text" class="form-control" autocomplete="off" value="<?= session()->get('nama_users'); ?>" disabled>
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
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Kartu Keluarga *</label>
                            <input type="number" name="no_kk" class="form-control" autocomplete="off" placeholder="Masukan No. Kartu Keluarga">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">NIK / No. Kitas (WNA) *</label>
                            <input type="number" name="nik" class="form-control" autocomplete="off" placeholder="Masukan NIK / No. Kitas">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir *</label>
                            <input type="text" name="tempat_lahir" class="form-control" autocomplete="off" placeholder="Masukan Tempat Lahir">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Lahir *</label>
                            <input type="text" name="tgl_lahir" id="datepicker" class="form-control" autocomplete="off" placeholder="Masukan Tanggal Lahir">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Registrasi Akta Kelahiran *</label>
                            <input type="number" name="no_akta" class="form-control" autocomplete="off" placeholder="Masukan No. Registrasi Akta Kelahiran">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Agama *</label>

                    <p>
                        <label class="md-check">
                            <input type="radio" name="agama" value="Islam">
                            <i class="blue"></i>
                            Islam
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="agama" value="Kristen / Protestan">
                            <i class="blue"></i>
                            Kristen / Protestan
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="agama" value="Hindu">
                            <i class="blue"></i>
                            Hindu
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="agama" value="Budha">
                            <i class="blue"></i>
                            Budha
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="agama" value="Khong Hu Chu">
                            <i class="blue"></i>
                            Khong Hu Chu
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="agama" value="Lainya">
                            <i class="blue"></i>
                            Lainya
                        </label>
                    </p>

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Kewarganegaraan *</label>
                    <div class="row row-sm">
                        <div class="col-sm-3">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="warga_negara" value="Indonesia (WNI)">
                                    <i class="blue"></i>
                                    Indonesia (WNI)
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="warga_negara" value="Asing (WNA)">
                                    <i class="blue"></i>
                                    Asing (WNA)
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <p>
                                <input type="text" name="warga_asing" class="form-control" autocomplete="off" placeholder="Masukan Nama Negara Asing">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat Jalan (Domisili) *</label>
                            <input type="text" name="jalan" class="form-control" autocomplete="off" placeholder="Contoh : Jl. Bumi Kartini No. 021">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">RT</label>
                            <input type="number" name="rt" class="form-control" autocomplete="off" placeholder="RT. 05">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">RW</label>
                            <input type="number" name="rw" class="form-control" autocomplete="off" placeholder="RW. 09">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Dusun</label>
                            <input type="text" name="dusun" class="form-control" autocomplete="off" placeholder="Masukan Nama Dusun">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Kelurahan / Desa *</label>
                            <input type="text" name="desa" class="form-control" autocomplete="off" placeholder="Masukan Nama Kelurahan">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kecamatan *</label>
                            <input type="text" name="kecamatan" class="form-control" autocomplete="off" placeholder="Masukan Nama Kecamatan">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Tinggal Bersama ? *</label>
                    <div class="row row-sm">
                        <div class="col-sm-2">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="tempat_tinggal" value="Orang Tua">
                                    <i class="blue"></i>
                                    Orang Tua
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-2">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="tempat_tinggal" value="Wali">
                                    <i class="blue"></i>
                                    Wali
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-2">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="tempat_tinggal" value="Kos">
                                    <i class="blue"></i>
                                    Kos
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-2">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="tempat_tinggal" value="Asrama">
                                    <i class="blue"></i>
                                    Asrama
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-2">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="tempat_tinggal" value="Panti Asuhan">
                                    <i class="blue"></i>
                                    Panti Asuhan
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-2">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="tempat_tinggal" value="Lainya">
                                    <i class="blue"></i>
                                    Lainya
                                </label>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Moda Transportasi *</label>
                            <select class="form-control" name="transportasi" id="" autocomplete="off">
                                <option value="Jalan Kaki">01. Jalan Kaki</option>
                                <option value="Sepeda Motor">02. Sepeda Motor</option>
                                <option value="Mobil">03. Mobil</option>
                                <option value="Kendaraan Umum">04. Kendaraan Umum</option>
                                <option value="Jemputan Sekolah">05. Jemputan Sekolah</option>
                                <option value="Kereta Api">06. Kereta Api</option>
                                <option value="Ojek">07. Ojek</option>
                                <option value="Lainya">08. Lainya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Penerimaan KPS *</label>
                    <div class="row row-sm">
                        <div class="col-sm-2">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="penerima_kps" value="Ya">
                                    <i class="blue"></i>
                                    Ya
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-2">
                            <p>
                                <label class="md-check">
                                    <input type="radio" name="penerima_kps" value="Tidak">
                                    <i class="blue"></i>
                                    Tidak
                                </label>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <p>
                                <input type="number" name="no_kps" class="form-control" autocomplete="off" placeholder="Masukan No. KPS / KIP">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Asal TK / RA *</label>
                            <input type="text" name="asal_tk" class="form-control" autocomplete="off" placeholder="Masukan Nama TK / RA">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat TK / RA *</label>
                            <input type="text" name="alamat_tk" class="form-control" autocomplete="off" placeholder="Masukan Alamat TK / RA">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1">NPSN TK / RA </label>
                            <input type="number" name="npsn_tk" class="form-control" autocomplete="off" placeholder="Masukan NPSN TK / RA">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="exampleInputPassword1">NISN *</label>
                            <input type="number" name="nisn_tk" class="form-control" autocomplete="off" placeholder="Masukan NISN TK / RA">
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
    }, 6000);
</script>