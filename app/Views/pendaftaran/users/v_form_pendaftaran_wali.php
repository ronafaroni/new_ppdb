<div class="card-heading">
    <h2>Data Orang Tua & Wali</h2>
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

            <form role="form" action="<?= base_url('pendaftaran/simpan_data_ortu') ?>" method="post">
                <h4><b>DATA AYAH KANDUNG</b></h4>
                <hr>
                <input type="hidden" name="nisn" class="form-control" autocomplete="off" value="<?= session()->get('no_nisn'); ?>">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap (Ayah) *</label>
                            <input type="text" name="nama_ayah" class="form-control" autocomplete="off" placeholder="Masukan Nama Lengkap">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">NIK / No. Kitas (WNA) *</label>
                            <input type="number" name="nik_ayah" class="form-control" autocomplete="off" placeholder="Masukan NIK / No. Kitas">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir (Ayah) *</label>
                            <input type="text" name="tempat_lahir_ayah" class="form-control" autocomplete="off" placeholder="Masukan Tempat Lahir">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Lahir (Ayah) *</label>
                            <input type="text" name="tgl_lahir_ayah" id="datepicker" class="form-control" autocomplete="off" placeholder="Masukan Tanggal Lahir">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pendidikan (Ayah) *</label>
                            <select class="form-control" name="pendidikan_ayah" id="" autocomplete="off">
                                <option value="Tidak Sekolah">01. Tidak Sekolah</option>
                                <option value="Putus SD">02. Putus SD</option>
                                <option value="SD Sederajat">03. SD Sederajat</option>
                                <option value="SMP Sederajat">04. SMP Sederajat</option>
                                <option value="SMA Sederajat">05. SMA Sederajat</option>
                                <option value="D1">06. D1</option>
                                <option value="D2">07. D2</option>
                                <option value="D3">08. D3</option>
                                <option value="D4 / S1">09. D4 / S1</option>
                                <option value="S2">10. S2</option>
                                <option value="S3">11. S3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pekerjaan (Ayah) *</label>
                            <select class="form-control" name="pekerjaan_ayah" id="" autocomplete="off">
                                <option value="Tidak Bekerja">01. Tidak Bekerja</option>
                                <option value="Nelayan">02. Nelayan</option>
                                <option value="Petani">03. Petani</option>
                                <option value="Peternak">04. Peternak</option>
                                <option value="PNS / TNI / POLRI">05. PNS / TNI / POLRI</option>
                                <option value="Karyawan Swasta">06. Karyawan Swasta</option>
                                <option value="Pedagang Kecil">07. Pedagang Kecil</option>
                                <option value="Pedagang Besar">08. Pedagang Besar</option>
                                <option value="Wiraswasta">09. Wiraswasta</option>
                                <option value="Wirausaha">10. Wirausaha</option>
                                <option value="Buruh">11. Buruh</option>
                                <option value="Pensiunan">12. Pensiunan</option>
                                <option value="Lainya">13. Lainya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Penghasilan (Ayah) *</label>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ayah" value="Kurang dari Rp. 500.000">
                            <i class="blue"></i>
                            01. Kurang dari Rp. 500.000
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ayah" value="Rp. 500.000 - 999.999">
                            <i class="blue"></i>
                            02. Rp. 500.000 - 999.999
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ayah" value="Rp. 1 Juta - 1.999.999">
                            <i class="blue"></i>
                            03. Rp. 1 Juta - 1.999.999
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ayah" value="2 Juta - 4.999.999">
                            <i class="blue"></i>
                            04. 2 Juta - 4.999.999
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ayah" value="5 Juta - 20 juta">
                            <i class="blue"></i>
                            05. 5 Juta - 20 juta
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ayah" value="Lebih dari 20 juta">
                            <i class="blue"></i>
                            06. Lebih dari 20 juta
                        </label>
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Handphone (Ayah) *</label>
                            <input type="number" name="no_hp_ayah" class="form-control" autocomplete="off" placeholder="Masukan No. Handphone">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email (Ayah) *</label>
                            <input type="text" name="email_ayah" class="form-control" autocomplete="off" placeholder="ppdb@gmail.com">
                        </div>
                    </div>
                </div>

                <h4><b>DATA IBU KANDUNG</b></h4>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap (Ibu) *</label>
                            <input type="text" name="nama_ibu" class="form-control" autocomplete="off" placeholder="Masukan Nama Lengkap">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">NIK / No. Kitas (WNA) *</label>
                            <input type="number" name="nik_ibu" class="form-control" autocomplete="off" placeholder="Masukan NIK / No. Kitas">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir (Ibu) *</label>
                            <input type="text" name="tempat_lahir_ibu" class="form-control" autocomplete="off" placeholder="Masukan Tempat Lahir">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Lahir (Ibu) *</label>
                            <input type="text" name="tgl_lahir_ibu" id="datepicker1" class="form-control" autocomplete="off" placeholder="Masukan Tanggal Lahir">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pendidikan (Ibu) *</label>
                            <select class="form-control" name="pendidikan_ibu" id="" autocomplete="off">
                                <option value="Tidak Sekolah">01. Tidak Sekolah</option>
                                <option value="Putus SD">02. Putus SD</option>
                                <option value="SD Sederajat">03. SD Sederajat</option>
                                <option value="SMP Sederajat">04. SMP Sederajat</option>
                                <option value="SMA Sederajat">05. SMA Sederajat</option>
                                <option value="D1">06. D1</option>
                                <option value="D2">07. D2</option>
                                <option value="D3">08. D3</option>
                                <option value="D4 / S1">09. D4 / S1</option>
                                <option value="S2">10. S2</option>
                                <option value="S3">11. S3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pekerjaan (Ibu) *</label>
                            <select class="form-control" name="pekerjaan_ibu" id="" autocomplete="off">
                                <option value="Tidak Bekerja">01. Tidak Bekerja</option>
                                <option value="Nelayan">02. Nelayan</option>
                                <option value="Petani">03. Petani</option>
                                <option value="Peternak">04. Peternak</option>
                                <option value="PNS / TNI / POLRI">05. PNS / TNI / POLRI</option>
                                <option value="Karyawan Swasta">06. Karyawan Swasta</option>
                                <option value="Pedagang Kecil">07. Pedagang Kecil</option>
                                <option value="Pedagang Besar">08. Pedagang Besar</option>
                                <option value="Wiraswasta">09. Wiraswasta</option>
                                <option value="Wirausaha">10. Wirausaha</option>
                                <option value="Buruh">11. Buruh</option>
                                <option value="Pensiunan">12. Pensiunan</option>
                                <option value="Lainya">13. Lainya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Penghasilan (Ibu) *</label>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ibu" value="Kurang dari Rp. 500.000">
                            <i class="blue"></i>
                            01. Kurang dari Rp. 500.000
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ibu" value="Rp. 500.000 - 999.999">
                            <i class="blue"></i>
                            02. Rp. 500.000 - 999.999
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ibu" value="Rp. 1 Juta - 1.999.999">
                            <i class="blue"></i>
                            03. Rp. 1 Juta - 1.999.999
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ibu" value="2 Juta - 4.999.999">
                            <i class="blue"></i>
                            04. 2 Juta - 4.999.999
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ibu" value="5 Juta - 20 juta">
                            <i class="blue"></i>
                            05. 5 Juta - 20 juta
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ibu" value="Lebih dari 20 juta">
                            <i class="blue"></i>
                            06. Lebih dari 20 juta
                        </label>
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Handphone (Ibu) *</label>
                            <input type="number" name="no_hp_ibu" class="form-control" autocomplete="off" placeholder="Masukan No. Handphone">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email (Ibu) *</label>
                            <input type="text" name="email_ibu" class="form-control" autocomplete="off" placeholder="ppdb@gmail.com">
                        </div>
                    </div>
                </div>

                <h4><b>DATA WALI SISWA</b></h4>
                <hr>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap (Wali) *</label>
                            <input type="text" name="nama_wali" class="form-control" autocomplete="off" placeholder="Masukan Nama Lengkap">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">NIK / No. Kitas (WNA) *</label>
                            <input type="number" name="nik_wali" class="form-control" autocomplete="off" placeholder="Masukan NIK / No. Kitas">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir (Wali) *</label>
                            <input type="text" name="tempat_lahir_wali" class="form-control" autocomplete="off" placeholder="Masukan Tempat Lahir">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Lahir (Wali) *</label>
                            <input type="text" name="tgl_lahir_wali" id="datepicker2" class="form-control" autocomplete="off" placeholder="Masukan Tanggal Lahir">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pendidikan (Wali) *</label>
                            <select class="form-control" name="pendidikan_wali" id="" autocomplete="off">
                                <option value="Tidak Sekolah">01. Tidak Sekolah</option>
                                <option value="Putus SD">02. Putus SD</option>
                                <option value="SD Sederajat">03. SD Sederajat</option>
                                <option value="SMP Sederajat">04. SMP Sederajat</option>
                                <option value="SMA Sederajat">05. SMA Sederajat</option>
                                <option value="D1">06. D1</option>
                                <option value="D2">07. D2</option>
                                <option value="D3">08. D3</option>
                                <option value="D4 / S1">09. D4 / S1</option>
                                <option value="S2">10. S2</option>
                                <option value="S3">11. S3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pekerjaan (Wali) *</label>
                            <select class="form-control" name="pekerjaan_wali" id="" autocomplete="off">
                                <option value="Tidak Bekerja">01. Tidak Bekerja</option>
                                <option value="Nelayan">02. Nelayan</option>
                                <option value="Petani">03. Petani</option>
                                <option value="Peternak">04. Peternak</option>
                                <option value="PNS / TNI / POLRI">05. PNS / TNI / POLRI</option>
                                <option value="Karyawan Swasta">06. Karyawan Swasta</option>
                                <option value="Pedagang Kecil">07. Pedagang Kecil</option>
                                <option value="Pedagang Besar">08. Pedagang Besar</option>
                                <option value="Wiraswasta">09. Wiraswasta</option>
                                <option value="Wirausaha">10. Wirausaha</option>
                                <option value="Buruh">11. Buruh</option>
                                <option value="Pensiunan">12. Pensiunan</option>
                                <option value="Lainya">13. Lainya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Penghasilan (Wali) *</label>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_wali" value="Kurang dari Rp. 500.000">
                            <i class="blue"></i>
                            01. Kurang dari Rp. 500.000
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_wali" value="Rp. 500.000 - 999.999">
                            <i class="blue"></i>
                            02. Rp. 500.000 - 999.999
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_wali" value="Rp. 1 Juta - 1.999.999">
                            <i class="blue"></i>
                            03. Rp. 1 Juta - 1.999.999
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_wali" value="2 Juta - 4.999.999">
                            <i class="blue"></i>
                            04. 2 Juta - 4.999.999
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_ayah" value="5 Juta - 20 juta">
                            <i class="blue"></i>
                            05. 5 Juta - 20 juta
                        </label>
                    </p>
                    <p>
                        <label class="md-check">
                            <input type="radio" name="penghasilan_wali" value="Lebih dari 20 juta">
                            <i class="blue"></i>
                            06. Lebih dari 20 juta
                        </label>
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Handphone (Wali) *</label>
                            <input type="number" name="no_hp_wali" class="form-control" autocomplete="off" placeholder="Masukan No. Handphone">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email (Wali) *</label>
                            <input type="text" name="email_wali" class="form-control" autocomplete="off" placeholder="ppdb@gmail.com">
                        </div>
                    </div>
                </div>

                <hr>
                <button type="submit" class="btn btn-addon btn-primary waves-effect"><i class="fa fa-plus"></i>Kirim Data Orang Tua & Wali</button>

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
    }, 10000);
</script>