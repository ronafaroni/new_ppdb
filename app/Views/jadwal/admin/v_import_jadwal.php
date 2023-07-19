<div class="card-heading">
    <h2>Jadwal Peserta PPDB</h2>
    <small>Silahkan cek kembali jadwal tes anda.</small>
</div>

<div class="col-md-12">
    <div class="card">

        <div class="panel-body">

            <h4 align="center"><b>JADWAL TES PESERTA</b></h4>
            <h4 align="center"> PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</h4><br>

            <div align="center">
                <a href="<?= base_url(); ?>/jadwal/download_template" class="btn btn-addon btn-success waves-effect"><i class="fa fa-download"></i> Download Template</a>
                <a href="<?= base_url(); ?>/jadwal/jadwalpdf" class="btn btn-addon btn-warning waves-effect" data-toggle="modal" data-target="#importExel"><i class="fa  fa-cloud-upload"></i> Upload Jadwal</a>
                <a href="<?= base_url(); ?>/jadwal/excel" class="btn btn-addon btn-info waves-effect"><i class="fa fa-file-excel-o"></i> Download Excel</a>
            </div><br>

            <div class="table-responsive">

                <?php if (!empty(session()->getFlashdata('success'))) { ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php } ?>

                <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('gagal') ?>
                    </div>
                <?php } ?>

                <table id="example2" class="table table-striped table-bordered">

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
                                <td colspan="13" align="center">Tidak ada data</td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>

<div class="container">
    <div class="modal fade" id="importExel" role="dialog">
        <div class="modal-dialog">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading bg-white">
                        <h3><b>Import Jadwal</b></h3>
                        <small>Masukkan data jadwal tes peserta PPDB.</small>
                    </div>

                    <div class="card-body">

                        <form action="<?= base_url('jadwal/prosesExcel/'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" class="form-control">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Import File .xls, .xlsx</label>
                                        <input type="file" name="data_jadwal" class="form-control" autocomplete="off" required accept=".xls, .xlsx">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-addon btn-success waves-effect"><i class="fa fa-database"></i>Import Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);
</script>