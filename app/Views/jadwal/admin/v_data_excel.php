<?php
header("Content-type: app/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Jadwal Tes.xls");
?>


<h4 align="center"><b>JADWAL TES PESERTA<br>
        PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</b></h4>

<div class="table-responsive">
    <table border="1">

        <thead>
            <tr>
                <td><b>NO.</b></td>
                <td><b>NO. PENDAFTARAN</b></td>
                <td><b>NAMA PESERTA</b></td>
                <td><b>JADWAL PSIKOTES</b></td>
                <td><b>WAKTU PSIKOTES</b></td>
                <td><b>RUANG PSIKOTES</b></td>

                <td><b>JADWAL OBSERVASI</b></td>
                <td><b>WAKTU OBSERVASI</b></td>
                <td><b>RUANG OBSERVASI</b></td>

                <td><b>JADWAL WAWANCARA</b></td>
                <td><b>WAKTU WAWANCARA</b></td>
                <td><b>RUANG WAWANCARA</b></td>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            if (!empty($excel)) {
                foreach ($excel as $value) {
            ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['no_pendaftaran'] ?></td>
                        <td><?= $value['nama_peserta'] ?></td>
                        <td><?= $value['tgl_tes_psikotes'] ?></td>
                        <td><?= $value['waktu_tes_psikotes'] ?></td>
                        <td><?= $value['ruangan_psikotes'] ?></td>

                        <td><?= $value['tgl_tes_observasi'] ?></td>
                        <td><?= $value['waktu_tes_observasi'] ?></td>
                        <td><?= $value['ruangan_observasi'] ?></td>

                        <td><?= $value['tgl_tes_wawancara'] ?></td>
                        <td><?= $value['waktu_tes_wawancara'] ?></td>
                        <td><?= $value['ruangan_wawancara'] ?></td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="12" align="center">Tidak ada data</td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>