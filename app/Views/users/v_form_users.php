<div class="card-heading">
    <h2>Daftar Pengguna Akun</h2>
    <small>Informasi tentang akun yang terdaftar.</small>
</div>

<div class="col-md-12">
    <div class="card">
        <br>
        <div class="panel-body">
            <h4 align="center"><b>DATA PENGGUNA AKUN</b></h4>
            <h4 align="center"> PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</h4>

            <br>

            <div class="table-responsive">

                <?php if (!empty(session()->getFlashdata('success'))) { ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php } ?>

                <table id="example" class="table table-striped table-bordered" class="display" style="width:100%">

                    <thead>
                        <tr>
                            <th><b>NO.</b></th>
                            <th><b>NO. IDENTITAS</b></th>
                            <th><b>PASSWORD</b></th>
                            <th><b>NAMA AKUN</b></th>
                            <th><b>TANGGAL DAFTAR</b></th>
                            <th><b>UMUR</b></th>
                            <th><b>ACTION</b></th>
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
                                    <td><b>
                                            <?php
                                            // tanggal lahir
                                            $tanggal = new DateTime($value['tgl_lahir']);

                                            // tanggal hari ini
                                            $today = new DateTime('2021-07-01');

                                            // tahun
                                            $y = $today->diff($tanggal)->y;

                                            // bulan
                                            $m = $today->diff($tanggal)->m;

                                            // hari
                                            $d = $today->diff($tanggal)->d;
                                            echo $y . " Tahun " . $m . " Bulan " . $d . " Hari";
                                            ?>
                                        </b>
                                    </td>
                                    <td>
                                        <a href="<?= base_url() ?>/users/hapus/<?= $value['id_users'] ?>" class="btn btn-addon btn-danger btn-sm waves-effect"><i class="fa fa-times"></i></span> HAPUS AKUN</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="7" align="center">
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

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>

<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printContent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>