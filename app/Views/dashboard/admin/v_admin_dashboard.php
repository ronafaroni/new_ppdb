<div class="card-heading">
    <h2>Dashboad PPDB Online</h2>
    <small>Data aktifitas pengelolaan PPDB 2021.</small>
</div>

<div class="row">
    <div class="col-sm-8">
        <div class="row row-sm">
            <div class="col-sm-6">
                <div class="panel panel-card p m-b-sm">
                    <h5 class="no-margin m-b"><b>Akun Users</b></h5>
                    <div class="panel-body text-center">
                        <div class="m-v-lg">
                            Total Accounts
                            <div class="h1 text-success font-bold">
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('tb_users');
                                $builder->like('role', 'users');
                                echo $builder->countAllResults();
                                ?> Users
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <strong>
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('tb_users');
                                $builder->like('role', 'users');
                                $users = $builder->countAllResults();

                                $db      = \Config\Database::connect();
                                $builder = $db->table('tb_pendaftaran');
                                $builder->like('no_pendaftaran');
                                $pendaftar = $builder->countAllResults();
                                //jika users 30 dan yang 3 daftar = 90 % free
                                $total = @(($pendaftar * 100) / $users);
                                $jumlah = 100 - $total;
                                echo $jumlah;
                                ?>%
                            </strong> Users Free
                        </div>
                        <small class="text-muted" id="demo2"></small>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-card p m-b-sm">
                    <h5 class="no-margin m-b"><b>Data Pendaftaran</b></h5>
                    <div class="panel-body text-center">
                        <div class="m-v-lg">
                            Total Accounts
                            <div class="h1 text-success font-bold">
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('tb_pendaftaran');
                                $builder->like('no_pendaftaran');
                                echo $builder->countAllResults();
                                ?> Pendaftar
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <strong>
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('tb_users');
                                $builder->like('role', 'users');
                                $users = $builder->countAllResults();

                                $db      = \Config\Database::connect();
                                $builder = $db->table('tb_berkas');
                                $builder->like('id_berkas');
                                $berkas = $builder->countAllResults();
                                //pendaftar 50 yang sudah daftar 5 = 10%
                                $total = @(($berkas * 100) / $users);

                                if ($total > 0) {
                                    echo $total;
                                } else {
                                    echo "0";
                                }
                                ?>%
                            </strong> Complate
                        </div>
                        <small class="text-muted" id="demo1"></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-sm-6">
                <div class="panel panel-card">
                    <div class="p">
                        <b>Berkas Ditolak</b>
                    </div>
                    <div class="panel-body text-center">
                        <div class="m-v-lg">
                            Total Accounts
                            <div class="h1 text-success font-bold">
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('tb_berkas');
                                $builder->like('status_pengajuan', 'DITOLAK');
                                echo $builder->countAllResults();
                                ?> Peserta
                            </div>
                        </div>
                    </div>
                    <div class="b-t b-light p">
                        <div class="progress progress-striped progress-sm r m-v-sm">
                            <?php
                            $db      = \Config\Database::connect();
                            $builder = $db->table('tb_berkas');
                            $builder->like('status_pengajuan', 'DITOLAK');
                            $status = $builder->countAllResults();

                            $db      = \Config\Database::connect();
                            $builder = $db->table('tb_pendaftaran');
                            $builder->like('no_pendaftaran');
                            $jumlah = $builder->countAllResults();

                            $total = @(($status * 100) / $jumlah);

                            echo '<div class="progress-bar amber" style="width:' . $total . '%"> ' . $total . '%</div>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-card">
                    <div class="p">
                        <b>Berkas Diterima</b>
                    </div>
                    <div class="panel-body text-center">
                        <div class="m-v-lg">
                            Total accounts
                            <div class="h1 text-success font-bold">
                                <?php
                                $db      = \Config\Database::connect();
                                $builder = $db->table('tb_berkas');
                                $builder->like('status_pengajuan', 'DITERIMA');
                                echo $builder->countAllResults();
                                ?> Peserta
                            </div>
                        </div>
                    </div>
                    <div class="b-t b-light p">
                        <div class="progress progress-striped progress-sm r m-v-sm">
                            <?php
                            $db      = \Config\Database::connect();
                            $builder = $db->table('tb_berkas');
                            $builder->like('status_pengajuan', 'DITERIMA');
                            $status = $builder->countAllResults();

                            $db      = \Config\Database::connect();
                            $builder = $db->table('tb_pendaftaran');
                            $builder->like('no_pendaftaran');
                            $jumlah = $builder->countAllResults();

                            $total = @(($status * 100) / $jumlah);

                            echo '<div class="progress-bar green" style="width:' . $total . '%"> ' . $total . '%</div>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="panel panel-card">
            <div class="panel-heading b-b b-light">

                <h4><b>DATA STATISTIK PENDAFTAR</b></h4>

            </div>
            <div class="list-group no-border no-radius">
                <div class="list-group-item">
                    <span class="pull-right">
                        <b>
                            <p id="timer"></p>
                        </b>
                    </span>
                    <i class="fa fa-fw fa-circle m-r-sm text-info"></i>
                    Waktu
                </div>
                <div class="list-group-item">
                    <span class="pull-right">
                        <?php
                        $db      = \Config\Database::connect();
                        $builder = $db->table('tb_berkas');
                        $builder->like('id_berkas');
                        $bayar = $builder->countAllResults();
                        $total = $bayar * 200000;
                        $hasil = "Rp " . number_format($total);
                        echo $hasil;
                        ?>
                    </span>
                    <i class="fa fa-fw fa-circle m-r-sm text-success"></i>
                    Saldo Pembayaran
                </div>
                <div class="list-group-item">
                    <span class="pull-right"><b><?= session()->get('nama_users') ?></b></span>
                    <i class="fa fa-fw fa-circle m-r-sm text-accent"></i>
                    Nama ID.
                </div>
                <div class="list-group-item">
                    <span class="pull-right"><b>18-Jan-2021</b></span>
                    <i class="fa fa-fw fa-circle m-r-sm text-warning"></i>
                    Buka Pendaftaran
                </div>
                <div class="list-group-item">
                    <span class="pull-right"><b>22-Jan-2021</b></span>
                    <i class="fa fa-fw fa-circle m-r-sm text-danger"></i>
                    Tutup Pendaftaran
                </div>
                <div class="list-group-item">
                    <span class="pull-right">

                        <?php
                        $db      = \Config\Database::connect();
                        $builder = $db->table('tb_berkas');
                        $builder->like('id_berkas');
                        $jumlah = $builder->countAllResults();
                        $total = ($jumlah / 150) * 100;
                        echo round($total, 1);
                        ?>% dari 100%

                    </span>
                    <i class="fa fa-fw fa-circle m-r-sm text-primary"></i>
                    Persentase Target
                </div>
                <div class="list-group-item">
                    <span class="pull-right">

                        <?php
                        $db      = \Config\Database::connect();
                        $builder = $db->table('tb_berkas');
                        $builder->like('id_berkas');
                        echo $builder->countAllResults();
                        ?> Data Berkas

                    </span>
                    <i class="fa fa-fw fa-circle m-r-sm text-dark"></i>
                    Data Berkas
                </div>
                <div class="list-group-item">
                    <span class="pull-right"><?= $browser; ?></span>
                    <i class="fa fa-fw fa-circle m-r-sm text-muted-lt"></i>
                    Perangkat
                </div>
                <div class="list-group-item">
                    <span class="pull-right"><?= $ip; ?></span>
                    <i class="fa fa-fw fa-circle m-r-sm text-muted-lt"></i>
                    IP Address
                </div>
                <div class="list-group-item">
                    <span class="pull-right"> <?= $os; ?></span>
                    <i class="fa fa-fw fa-circle m-r-sm text-muted-lt"></i>
                    Sistem Operasi
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 22, 2021 24:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("timer").innerHTML = days + " Hari " + hours + " Jam " +
            minutes + " Menit " + seconds + " Detik ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 28, 2021 24:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo1").innerHTML = days + " Hari " + hours + " Jam " +
            minutes + " Menit " + seconds + " Detik ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo1").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 28, 2021 24:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo2").innerHTML = days + " Hari " + hours + " Jam " +
            minutes + " Menit " + seconds + " Detik ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo2").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>