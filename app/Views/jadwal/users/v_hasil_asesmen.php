<div class="card-heading">
    <h2>Hasil Tes Peserta PPDB</h2>
    <small>Informasi yang dicantumkan mutlak keputusan panitia.</small>
</div>

<div class="col-md-12">
    <div class="card">
        <br>
        <div class="panel-body">
            <h4 align="center"><b>PENGUMUMAN ASSESMEN</b></h4>
            <h4 align="center"> PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</h4>

            <br>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">

                    <thead>
                        <tr>
                            <th><b>NO. NISN</b></th>
                            <th><b>NO. REGISTRASI</b></th>
                            <th><b>NAMA PESERTA</b></th>
                            <th><b>UNIT SEKOLAH</b></th>
                            <th><b>HASIL</b></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (!empty($hasil)) { ?>

                            <?php
                            $no = 1;
                            foreach ($hasil as $key => $value) { ?>

                                <tr>
                                    <td><?= $value['no_nisn'] ?></td>
                                    <td><?= $value['no_pendaftaran'] ?></td>
                                    <td><?= $value['nama_peserta'] ?></td>
                                    <td>SDUT BUMI KARTINI</td>
                                    <td><?= $value['hasil_tes'] ?></td>
                                </tr>

                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5" align="center">Tidak ada data</td>
                            </tr>
                        <?php
                        }
                        ?>

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