<div>
    <img src="<?= base_url(); ?>/public/landing/images/cop.png" alt="">
    <h3 align="center"><b>KARTU PENDAFTARAN</b> <br> PENERIMAAN PESERTA DIDIK BARU (PPDB)</h3>
</div>

<?php
if (!empty($konfirmasi)) {
    foreach ($konfirmasi as $key => $value) { ?>

        <div class="col-sm-6">
            <table class="table table-bordered">
                <tbody align="center">
                    <tr>
                        <td width="30%">Status Pendaftaran </td>
                        <td width="70%">: <b><?php
                                                $cek = $value['status_pengajuan'];
                                                if ($cek > ' ') {
                                                    echo $value['status_pengajuan'];
                                                } else {
                                                    echo "MENUNGGU";
                                                }
                                                ?>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">No. Registrasi </td>
                        <td width="70%">: <b><?= $value['no_pendaftaran']; ?></b></td>
                    </tr>
                    <tr>
                        <td width="30%">Nama Peserta</td>
                        <td width="70%">: <b><?= $value['nama_peserta']; ?></b></td>
                    </tr>
                    <tr>
                        <td width="30%">Unit Sekolah</td>
                        <td width="70%">: <b>SDUT BUMI KARTINI JEPARA</b></td>
                    </tr>
                    <tr>
                        <td width="30%">Tgl. Pendaftaran</td>
                        <td width="70%">: <b><?= $value['tgl_update']; ?></b></td>
                    </tr>
                    <tr>
                        <td width="30%"></td>
                        <td width="70%"></td>
                    </tr>
                    <tr>
                        <td width="30%">Asal TK / RA</td>
                        <td width="70%">: <b><?= $value['asal_tk']; ?></b></td>
                    </tr>

                    <tr>
                        <td width="30%">Alamat</td>
                        <td width="70%">: <b><?= $value['alamat_tk']; ?></b></td>
                    </tr>
                </tbody>
            </table>
        </div>

    <?php } ?>
<?php } else { ?>
    <?php foreach ($daftar as $key => $value) { ?>

        <div class="col-sm-6">
            <table class="table table-bordered">
                <tbody align="center">
                    <tr>
                        <td width="30%">Status Pendaftaran </td>
                        <td width="70%">: <b>MENUNGGU</b>

                        </td>
                    </tr>
                    <tr>
                        <td width="30%">No. Registrasi </td>
                        <td width="70%">: <b><?= $value['no_pendaftaran']; ?></b></td>
                    </tr>
                    <tr>
                        <td width="30%">Nama Peserta</td>
                        <td width="70%">: <b><?= $value['nama_peserta']; ?></b></td>
                    </tr>
                    <tr>
                        <td width="30%">Unit Sekolah</td>
                        <td width="70%">: <b>SDUT BUMI KARTINI JEPARA</b></td>
                    </tr>
                    <tr>
                        <td width="30%">Tgl. Pendaftaran</td>
                        <td width="70%">: <b><?= $value['tgl_update']; ?></b></td>
                    </tr>
                    <tr>
                        <td width="30%"></td>
                        <td width="70%"></td>
                    </tr>
                    <tr>
                        <td width="30%">Asal TK / RA</td>
                        <td width="70%">: <b><?= $value['asal_tk']; ?></b></td>
                    </tr>
                    <tr>
                        <td width="30%">Alamat</td>
                        <td width="70%">: <b><?= $value['alamat_tk']; ?></b></td>
                    </tr>
                </tbody>
            </table>
        </div>

    <?php } ?>
<?php } ?>

<p align="justify">Dengan ini menyatakan bahwa nama yang tercantum diatas mendaftar sebagai <b>PESERTA</b> pada Penerimaan Peserta Didik Baru (PPDB) Tahun 2021. Sebagai bukti penyelesaian administrasi dapat dilihat sebagai berikut.</p>

<table class="table" border="1">
    <thead>
        <tr align="center">
            <th><b>DATA PEMBERKASAN</b></th>
            <th><b>STATUS PENGAJUAN</b></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($berkas as $key => $value) { ?>
            <tr>
                <td> 1.) Scan/Foto Kartu Keluarga</td>
                <td align="center">
                    <?php
                    $nilai = $value['foto_kk'];
                    if ($nilai > ' ') {
                        echo "SUDAH";
                    } else {
                        echo "BELUM";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td> 2.) Scan/Foto Akta Kelahiran</td>
                <td align="center">
                    <?php
                    $nilai = $value['foto_akta'];
                    if ($nilai > ' ') {
                        echo "SUDAH";
                    } else {
                        echo "BELUM";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td> 3.) Scan/Foto KTP Orang Tua</td>
                <td align="center">
                    <?php
                    $nilai = $value['foto_ktp_ortu'];
                    if ($nilai > ' ') {
                        echo "SUDAH";
                    } else {
                        echo "BELUM";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td> 4.) Scan/Foto Siswa Terbaru</td>
                <td align="center">
                    <?php
                    $nilai = $value['foto_siswa'];
                    if ($nilai > ' ') {
                        echo "SUDAH";
                    } else {
                        echo "BELUM";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td> 5.) Scan/Foto Bukti Pembayaran</td>
                <td align="center">
                    <?php
                    $nilai = $value['foto_bayar'];
                    if ($nilai > ' ') {
                        echo "SUDAH";
                    } else {
                        echo "BELUM";
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<p align="justify"><b>KETERANGAN :</b></p>
<ul>
    <li>Kartu Pendaftaran wajib dicetak dan dibawa saat mengikuti serangkaian tes.</li>
    <li>Peserta wajib mengikuti serangkaian tes yang sudah ditentukan oleh panitia.</li>
    <li>Peserta wajib mematuhi seluruh aturan dan ketentuan yang berlaku.</li>
    <li>Semua hasil keputusan panitia adalah bersifat mutlak.</li>
</ul>
<br>
<table>

    <tr>
        <td width="65%"></td>
        <td width="35%"> Mengetahui</td>
    </tr>
    <tr>
        <td></td>
        <td> Peserta PPDB 2021,</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <?php foreach ($status as $key => $value) { ?>
        <tr>
            <td></td>
            <td><b> <?= $value['nama_peserta']; ?></b></td>
        </tr>
    <?php } ?>

    <?php foreach ($status as $key => $value) { ?>
        <tr>
            <td>
                <small>#cetak_kartu_pendaftaran :
                    <?php
                    date_default_timezone_set("Asia/Jakarta");
                    echo date("d-m-Y") . ' ' . date("H:i:s");
                    ?>
                </small>
            </td>
            <td></td>
        </tr>
    <?php } ?>

</table>