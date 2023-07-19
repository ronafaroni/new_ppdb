<div class="card-heading">
    <h2>Data Pendaftaran PPDB</h2>
    <small>Informasi terupdate pendaftar PPDB Online.</small>
</div>

<div class="col-md-12">
    <div class="card">
        <br>
        <div class="panel-body">
            <h4 align="center"><b>DATA PENDAFTARAN</b></h4>
            <h4 align="center"> PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</h4>

            <br>
            <div align="center">
                <a href="<?= base_url(); ?>/pendaftaran/PrintPendaftar" target="_blank" class="btn btn-addon btn-success waves-effect"><i class="fa fa-file-pdf-o"></i> Download & Print PDF</a>
                <a href="<?= base_url(); ?>/pendaftaran/ExcelPrint" target="_blank" class="btn btn-addon btn-warning waves-effect"><i class="fa fa-file-excel-o"></i> Export Excel</a>
            </div>

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" class="display" style="width:100%">

                    <thead>
                        <tr>
                            <th><b>NO.</b></th>
                            <th><b>NO. PENDAFTARAN</b></th>
                            <th><b>NAMA LENGKAP</b></th>
                            <th><b>ASAL SEKOLAH</b></th>
                            <th><b>NOMOR TELP.</b></th>
                            <th><b>TANGGAL DAFTAR</b></th>
                            <th><b>STATUS</b></th>
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
                                    <td><?= $value['tgl_update'] ?></td>
                                    <td>
                                        <?php
                                        $cek = $value['status_pengajuan'];
                                        if ($cek == null) {
                                            echo "MENUNGGU";
                                        } else {
                                            echo $value['status_pengajuan'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" align="center">
                                    Data tidak ditemukan.
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
            <br>
        </div>
    </div>
</div>

<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printContent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>