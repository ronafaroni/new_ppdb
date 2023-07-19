<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading no-border">
                <img src="<?php echo base_url(); ?>assets/imgs/logo-kop.png" class="img-responsive" alt="">
                <br>
                <h4 align="center"><b>DATA PENDAFTARAN</b></h4>
                <h4 align="center"> PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</h4>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><b>NO.</b></th>
                            <th><b>NO. PENDAFTARAN</b></th>
                            <th><b>NAMA LENGKAP</b></th>
                            <th><b>ASAL SEKOLAH</b></th>
                            <th><b>NOMOR TELP.</b></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (!empty($daftar)) {
                            $no = 1;
                            foreach ($daftar as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['no_pendaftaran'] ?></td>
                                    <td><?= $value['nama_peserta'] ?></td>
                                    <td><?= $value['asal_tk'] ?></td>
                                    <td><?= $value['no_telp'] ?></td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="5" align="center">
                                    Data tidak ditemukan.
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

        </section>
    </div>
</div>


<script>
    window.print();
</script>