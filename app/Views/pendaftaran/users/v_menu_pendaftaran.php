<div class="card-heading">
    <h2>Menu Pendaftaran Siswa</h2>
    <small>Pastikan semua data sudah terisi dengan benar.</small>
</div>

<div class="row">

    <div class="col-sm-12">
        <?php if (!empty(session()->getFlashdata('success'))) { ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php } ?>
    </div>

    <div class="col-sm-3">
        <div class="panel panel-card">
            <div class="item">
                <?php
                if (!empty($menu_siswa)) {

                    foreach ($menu_siswa as $key => $value) {

                        $cek = $value['tgl_update'];
                        if ($cek == ' ') {
                            echo ('<img src="public/template/images/blank.png" class="w-full r-t" alt="Washed Out2">');
                        } else {
                            echo ('<img src="public/template/images/mountains1.png" class="w-full r-t" alt="Washed Out1">');
                        }
                    }
                } else {
                    echo ('<img src="public/template/images/blank.png" class="w-full r-t" alt="Washed">');
                }
                ?>

                <div class="bottom text-white p">

                    <?php
                    foreach ($menu_siswa as $key => $value) { ?>
                        Upload : <?= $value['tgl_update']; ?>
                    <?php } ?>

                </div>
            </div>
            <!-- <a md-ink-ripple class="md-btn md-raised md-fab bg-white m-r md-fab-offset pull-right"><span class="text-white">01</span></a> -->
            <a href="<?= base_url(); ?>/pendaftaran/form_pendaftaran" md-ink-ripple class="md-btn md-fab md-raised bg-white m-r md-fab-offset pull-right">
                01
            </a>

            <div class="p">
                <h3>Data Peserta</h3>
            </div>
        </div>
    </div>


    <div class="col-sm-3">
        <div class="panel panel-card">
            <div class="item">
                <?php
                if (!empty($menu_ortu)) {

                    foreach ($menu_ortu as $key => $value) {

                        $cek = $value['tgl_update'];
                        if ($cek == ' ') {
                            echo ('<img src="public/template/images/blank.png" class="w-full r-t" alt="Washed Out2">');
                        } else {
                            echo ('<img src="public/template/images/mountains2.jpg" class="w-full r-t" alt="Washed Out1">');
                        }
                    }
                } else {
                    echo ('<img src="public/template/images/blank.png" class="w-full r-t" alt="Washed">');
                }
                ?>
                <div class="bottom text-white p">
                    <?php
                    foreach ($menu_ortu as $key => $value) { ?>
                        Upload : <?= $value['tgl_update']; ?>
                    <?php } ?>
                </div>
            </div>

            <?php
            foreach ($menu_siswa as $key => $value) { ?>
                <a href="<?= base_url(); ?>/pendaftaran/form_pendaftaran_wali" md-ink-ripple class="md-btn md-fab md-raised bg-white m-r md-fab-offset pull-right">02</a>
            <?php } ?>

            <div class="p">
                <h3>Data Orang Tua</h3>

            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-card">
            <div class="item">
                <?php
                if (!empty($menu_periodik)) {

                    foreach ($menu_periodik as $key => $value) {

                        $cek = $value['tgl_update'];
                        if ($cek == ' ') {
                            echo ('<img src="public/template/images/blank.png" class="w-full r-t" alt="Washed Out2">');
                        } else {
                            echo ('<img src="public/template/images/mountains3.png" class="w-full r-t" alt="Washed Out1">');
                        }
                    }
                } else {
                    echo ('<img src="public/template/images/blank.png" class="w-full r-t" alt="Washed">');
                }
                ?>
                <div class="bottom text-white p">
                    <?php
                    foreach ($menu_periodik as $key => $value) { ?>
                        Upload : <?= $value['tgl_update']; ?>
                    <?php } ?>
                </div>
            </div>

            <?php
            foreach ($menu_ortu as $key => $value) { ?>
                <a href="<?= base_url(); ?>/pendaftaran/form_data_periodik" md-ink-ripple class="md-btn md-fab bg-white m-r md-fab-offset pull-right">03</a>
            <?php } ?>

            <div class="p">
                <h3>Data Periodik</h3>

            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-card">
            <div class="item">
                <?php
                if (!empty($menu_berkas)) {

                    foreach ($menu_berkas as $key => $value) {

                        $cek = $value['tgl_update'];
                        if ($cek == ' ') {
                            echo ('<img src="public/template/images/blank.png" class="w-full r-t" alt="Washed Out2">');
                        } else {
                            echo ('<img src="public/template/images/mountains4.png" class="w-full r-t" alt="Washed Out1">');
                        }
                    }
                } else {
                    echo ('<img src="public/template/images/blank.png" class="w-full r-t" alt="Washed">');
                }
                ?>
                <div class="bottom text-white p">
                    <?php
                    foreach ($menu_berkas as $key => $value) { ?>
                        Upload : <?= $value['tgl_update']; ?>
                    <?php } ?>
                </div>
            </div>
            <?php
            foreach ($menu_periodik as $key => $value) { ?>
                <a href="<?= base_url(); ?>/pendaftaran/form_data_berkas" md-ink-ripple class="md-btn md-fab md-raised bg-white m-r md-fab-offset pull-right">04</a>
            <?php } ?>

            <div class="p">
                <h3>Data Pemberkasan</h3>

            </div>
        </div>
    </div>

</div>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>