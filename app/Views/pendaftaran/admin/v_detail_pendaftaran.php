<div class="panel panel-default">
    <div class="panel-heading bg-white">
        <h3><b>Detail Data Peserta</b></h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">

                <tbody>
                    <tr>

                        <td colspan="4" align="center">
                            <h4><b>A. DATA PESERTA PPBD</b></h4>
                        </td>

                    </tr>
                    <tr>

                        <td><b>No. Pendaftaran</b></td>
                        <td>: <b><?= $detail['no_pendaftaran'] ?></b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>No. NISN / NPSN</td>
                        <td>: <?= $detail['no_nisn'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Nama Peserta</td>
                        <td>: <?= $detail['nama_lengkap'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>No. KK</td>
                        <td>: <?= $detail['no_kk'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>NIK</td>
                        <td>: <?= $detail['nik'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Jenis Kelamin</td>
                        <td>: <?= $detail['jns_kelamin'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Tempat, Tgl. Lahir</td>
                        <td>: <?= $detail['tempat_lahir'] ?>, <?= $detail['tgl_lahir'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>No. Akta</td>
                        <td>: <?= $detail['no_akta'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Agama</td>
                        <td>: <?= $detail['agama'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Kewarganegaraan</td>
                        <td>: <?= $detail['warga_negara'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Alamat</td>
                        <td>: <?= $detail['jalan'] ?> RT. <?= $detail['rt'] ?> RW. <?= $detail['rw'] ?> Dusun <?= $detail['dusun'] ?> </td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Desa</td>
                        <td>: DESA <?= $detail['desa'] ?> </td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Kecamatan</td>
                        <td>: KECAMATAN <?= $detail['kecamatan'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Tempat Tinggal</td>
                        <td>: <?= $detail['tempat_tinggal'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Transportasi</td>
                        <td>: <?= $detail['transportasi'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>No. KPS</td>
                        <td>: <?= $detail['no_kps'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Asal TK / RA</td>
                        <td>: <?= $detail['asal_tk'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Alamat TK / RA</td>
                        <td>: <?= $detail['alamat_tk'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>NISN TK / RA</td>
                        <td>: <?= $detail['nisn'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>NPSN TK / RA</td>
                        <td>: <?= $detail['npsn_tk'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
                <br>



                <tbody>
                    <td colspan="4" align="center">
                        <h4><b>B. DATA ORANG TUA & WALI</b></h4>
                    </td>

                    <tr>

                        <td><b>1.) Data Ayah</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Nama Lengkap</td>
                        <td>: <?= $detail['nama_ayah'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>NIK</td>
                        <td>: <?= $detail['nik_ayah'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Tempat, Tgl Lahir</td>
                        <td>: <?= $detail['tempat_lahir_ayah'] ?>, <?= $detail['tgl_lahir_ibu'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Pendidikan</td>
                        <td>: <?= $detail['pendidikan_ayah'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Pekerjaan</td>
                        <td>: <?= $detail['pekerjaan_ayah'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Penghasilan</td>
                        <td>: <?= $detail['penghasilan_ayah'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>No. HP</td>
                        <td>: <?= $detail['no_hp_ayah'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Email</td>
                        <td>: <?= $detail['email_ayah'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>




                    <tr>

                        <td><b>2.) Data Ibu</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Nama Lengkap</td>
                        <td>: <?= $detail['nama_ibu'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>NIK</td>
                        <td>: <?= $detail['nik_ibu'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Tempat, Tgl Lahir</td>
                        <td>: <?= $detail['tempat_lahir_ibu'] ?>, <?= $detail['tgl_lahir_ibu'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Pendidikan</td>
                        <td>: <?= $detail['pendidikan_ibu'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Pekerjaan</td>
                        <td>: <?= $detail['pekerjaan_ibu'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Penghasilan</td>
                        <td>: <?= $detail['penghasilan_ibu'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>No. HP</td>
                        <td>: <?= $detail['no_hp_ibu'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Email</td>
                        <td>: <?= $detail['email_ayah'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>




                    <tr>

                        <td><b>3.) Data Wali</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Nama Lengkap</td>
                        <td>: <?= $detail['nama_wali'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>NIK</td>
                        <td>: <?= $detail['nik_wali'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Tempat, Tgl Lahir</td>
                        <td>: <?= $detail['tempat_lahir_wali'] ?>, <?= $detail['tgl_lahir_wali'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Pendidikan</td>
                        <td>: <?= $detail['pendidikan_wali'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Pekerjaan</td>
                        <td>: <?= $detail['pekerjaan_wali'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Penghasilan</td>
                        <td>: <?= $detail['penghasilan_wali'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>No. HP</td>
                        <td>: <?= $detail['no_hp_wali'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Email</td>
                        <td>: <?= $detail['email_wali'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>


                <tbody>
                    <td colspan="4" align="center">
                        <h4><b>C. DATA PERIODIK</b></h4>
                    </td>

                    <tr>

                        <td>Tinggi Badan</td>
                        <td>: <?= $detail['tinggi'] ?> Cm</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Berat Badan</td>
                        <td>: <?= $detail['berat'] ?> Kg</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>

                        <td>Jarak</td>
                        <td>: <?= $detail['jarak'] ?> (<?= $detail['jarak_angka'] ?>)</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Waktu Tempuh</td>
                        <td>: <?= $detail['waktu_tempuh_jam'] ?> Jam, <?= $detail['waktu_tempuh_menit'] ?> Menit</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Jumlah Saudara</td>
                        <td>: <?= $detail['jumlah_saudara'] ?> Orang</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Anak Ke</td>
                        <td>: <?= $detail['anak_ke'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td>Telp.</td>
                        <td>: <?= $detail['telp'] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <br>

        </div>

    </div>