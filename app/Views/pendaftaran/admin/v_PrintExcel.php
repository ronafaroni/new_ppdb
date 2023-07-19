<?php
header("Content-type: app/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pendaftaran.xlsx");
?>

<h4 align="center"><b>DATA PENDAFTARAN</b></h4>
<h4 align="center"> PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</h4>

<div class="table-responsive">
    <table border="1">
        <thead>
            <tr>
                <th><b>NO.</b></th>
                <th><b>NO. PENDAFTARAN</b></th>
                <th><b>NAMA LENGKAP</b></th>
                <th><b>JENIS KELAMIN</b></th>
                <th><b>TEMPAT LAHIR</b></th>
                <th><b>TANGGAL LAHIR</b></th>
                <th><b>NAMA AYAH</b></th>
                <th><b>NAMA IBU</b></th>
                <th><b>NO. TELP.</b></th>
                <th><b>ALAMAT</b></th>
                <th><b>ASAL TK</b></th>
                <th><b>ALAMAT TK</b></th>
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
                        <td><?= $value['jns_kelamin'] ?></td>
                        <td><?= $value['tempat_lahir'] ?></td>
                        <td><?= $value['tgl_lahir'] ?></td>
                        <td><?= $value['nama_ayah'] ?></td>
                        <td><?= $value['nama_ibu'] ?></td>
                        <td><?= $value['no_telp'] ?></td>
                        <td><?= $value['alamat'] ?></td>
                        <td><?= $value['asal_tk'] ?></td>
                        <td><?= $value['alamat_tk'] ?></td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="12" align="center">
                        Data tidak ditemukan.
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</div>