<div class="card-heading">
    <h2>Hasil Tes PPDB</h2>
    <small>Silahkan cek kembali hasil tes anda.</small>
</div>

<div class="col-md-12">
    <div class="card">

        <div class="panel-body">

            <h4 align="center"><b>HASIL TES PESERTA</b></h4>
            <h4 align="center"> PENERIMAAN PESERTA DIDIK BARU (PPDB) 2021</h4><br>

            <div align="center">
                <a href="<?= base_url(); ?>/jadwal/download_hasil" class="btn btn-addon btn-info waves-effect"><i class="fa fa-download"></i> Downloads</a>
                <a href="<?= base_url(); ?>/jadwal/jadwalpdf" class="btn btn-addon btn-success waves-effect" data-toggle="modal" data-target="#importhasil"><i class="fa  fa-cloud-upload"></i> Uploads</a>
                <a href="<?= base_url(); ?>/jadwal/excelHasil" class="btn btn-addon btn-warning waves-effect"><i class="fa  fa-file-excel-o"></i> Excel</a>
                <a href="<?= base_url(); ?>/jadwal/printHasil" target="_blank" class="btn btn-addon btn-primary waves-effect"><i class="fa  fa-print"></i> Print</a>
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
                                    <td> <?= $value['no_pendaftaran'] ?></td>
                                    <td> <?= $value['nama_peserta'] ?></td>
                                    <td> SDUT BUMI KARTINI JEPARA</td>
                                    <td> <?= $value['hasil_tes'] ?></td>
                                </tr>

                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5" align="center">Tidak ada data</td>
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
    <div class="modal fade" id="importhasil" role="dialog">
        <div class="modal-dialog">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading bg-white">
                        <h3><b>Import Hasil Tes</b></h3>
                        <small>Masukkan data hasil tes peserta PPDB.</small>
                    </div>

                    <div class="card-body">

                        <form action="<?= base_url('jadwal/prosesHasil/'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" class="form-control">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Import File .xls, .xlsx</label>
                                        <input type="file" name="data_hasil" class="form-control" autocomplete="off" required accept=".xls, .xlsx">
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

<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printContent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>