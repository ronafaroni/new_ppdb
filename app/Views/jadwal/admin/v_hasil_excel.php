<?php
header("Content-type: app/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Hasil Tes.xls");
?>

<h4 align="center"><b>HASIL TES PESERTA <br>
        PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</b></h4>

<div class="table-responsive">
    <table border="1">

        <thead>
            <tr>
                <td><b>NO.</b></td>
                <td><b>NO. NISN</b></td>
                <td><b>NO. PENDAFTARAN</b></td>
                <td><b>NAMA PESERTA</b></td>
                <td><b>UNIT SEKOLAH</b></td>
                <td><b>HASIL TES</b></td>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            if (!empty($hasil)) {
                foreach ($hasil as $value) {
            ?>

                    <tr>
                        <td> <?= $no++; ?></td>
                        <td> <?= $value['no_nisn'] ?></td>
                        <td> <?= $value['no_pendaftaran'] ?></td>
                        <td> <?= $value['nama_peserta'] ?></td>
                        <td> SDUT BUMI KARTINI</td>
                        <td> <?= $value['hasil_tes'] ?></td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="6" align="center">Tidak ada data</td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>