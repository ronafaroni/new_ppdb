<div>
    <img src="<?= base_url(); ?>/public/landing/images/cop.png" alt="">
    <h3 align="center"><b>JADWAL TES</b> <br> PENERIMAAN PESERTA DIDIK BARU (PPDB)</h3>
</div>

<?php
if (!empty($status)) { ?>
    <?php foreach ($status as $key => $value) { ?>

        <table class="table">
            <tbody>
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
                    <td width="30%">Tgl. Daftar</td>
                    <td width="70%">: <b><?= $value['tgl_update']; ?></b></td>
                </tr>
            </tbody>
        </table>

    <?php } ?>

<?php } else { ?>

    <table class="table">
        <tbody>
            <tr>
                <td width="30%">No. Pendaftaran </td>
                <td width="70%">: - - - -</td>
            </tr>
            <tr>
                <td width="30%">Nama Peserta</td>
                <td width="70%">: - - - -</td>
            </tr>
            <tr>
                <td width="30%">Unit Sekolah</td>
                <td width="70%">: - - - -</td>
            </tr>
            <tr>
                <td width="30%">Tgl. Daftar</td>
                <td width="70%">: - - - -</td>
            </tr>
        </tbody>
    </table>

<?php } ?>

<div></div>
<table class="table" border="1">
    <tbody>
        <tr>
            <td width="23%" align="center"><b> KETERANGAN</b></td>
            <td width="25%" align="center"><b> TANGGAL</b></td>
            <td width="25%" align="center"><b> WAKTU</b></td>
            <td width="25%" align="center"><b> RUANGAN</b></td>
        </tr>

        <?php
        if (!empty($jadwal)) { ?>
            <?php foreach ($jadwal as $key => $value) { ?>
                <tr>
                    <td> 1.) <b>PESIKOTES</b></td>
                    <td> <?= $value['tgl_tes_psikotes'] ?></td>
                    <td> <?= $value['waktu_tes_psikotes'] ?></td>
                    <td> <?= $value['ruangan_psikotes'] ?></td>
                </tr>

                <tr>
                    <td> 2.) <b>OBSERVASI</b></td>
                    <td> <?= $value['tgl_tes_observasi'] ?></td>
                    <td> <?= $value['waktu_tes_observasi'] ?></td>
                    <td> <?= $value['ruangan_observasi'] ?></td>
                </tr>

                <tr>
                    <td> 3.) <b>WAWANCARA</b></td>
                    <td> <?= $value['tgl_tes_wawancara'] ?></td>
                    <td> <?= $value['waktu_tes_wawancara'] ?></td>
                    <td> <?= $value['ruangan_wawancara'] ?></td>
                </tr>
            <?php } ?>

        <?php } else { ?>

            <tr>
                <td> 1.) <b>PESIKOTES</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td> 2.) <b>OBSERVASI</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td> 3.) <b>WAWANCARA</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        <?php } ?>
    </tbody>
</table>

<p align="justify">Diharapkan peserta dapat datang tepat waktu untuk verifikasi Kartu Pendaftaran <b>PPDB 2021</b> yang telah dicetak. Tetap patuhi protokol kesehatan demi keselamatan kita semua. Terima Kasih.</p>

<table>
    <tr>
        <td></td>
        <td></td>
    </tr>
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
            <td>
                <small>#cetak_jadwal_tes :
                    <?=
                    date('d-m-Y h:i:s');
                    ?>
                </small>
            </td>
            <td></td>
        </tr>
    <?php } ?>

</table>