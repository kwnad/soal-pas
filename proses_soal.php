<?php
if (isset($_GET['save'])) {
    $bendahara = $_GET['bendahara'];
    $pekerja = $_GET['pekerja'];
    $jk = $_GET['jk'];
    $tg = $_GET['tg'];
    $jabatan = $_GET['jabatan'];
    $pendidikan = $_GET['pendidikan'];
    $status = $_GET['status'];
    $hari = $_GET['hari'];
    $bpjs = $_GET['bpjs'];

    $lembur = $hari * 20000;

    if ($jabatan == "Direktur") {
        $gaji = 10000000;
    } else if ($jabatan == "Manager") {
        $gaji = 7500000;
    } else if ($jabatan == "Sekretaris") {
        $gaji = 5000000;
    } else if ($jabatan == "Karyawan") {
        $gaji = 3000000;
    } else if ($jabatan == "OB") {
        $gaji = 1500000;
    }

    if ($pendidikan == "SD") {
        $tunjangan = 200000;
    } else if ($pendidikan == "SMP") {
        $tunjangan = 500000;
    } else if ($pendidikan == "SMA") {
        $tunjangan = 1000000;
    } else if ($pendidikan == "S1") {
        $tunjangan = 1500000;
    } else if ($pendidikan == "S2") {
        $tunjangan = 2000000;
    }

    if ($status == "Tetap") {
        $bonus = 500000;
        $total = $gaji + $tunjangan + $lembur + $bonus;
        $tgaji = $total - $bpjs;
    } else if ($status == "Kontrak") {
        $bonus = 0;
        $total = $gaji + $tunjangan + $lembur;
        $tgaji = $total - $bpjs;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Soal 2</title>
</head>
<body style="background-color: lightsteelblue">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="soal1.php">Soal 1</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="soal2.php">Soal 2</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="soal3.php">Soal 3</a>
            </li>
        </div>
    </div>
    </nav>
    <div class="card border-dark mb-3 container" style="width: 40rem">
        <div class="card-body">
        <center>
            <h2>Struk Gaji Karyawan</h2>
            <hr>
        </center>
        <p style="text-align:right">
        Tanggal : <?php echo $tg; ?>
        </p>
        <table>
            <tr>
                <th>
                    <h3 style="padding: 10px;">
                        <em>
                            Gaji Pokok
                        </em>
                    </h3>
                </th>
            </tr>
            
            <tr>
                <th>Nama Karyawan</th>
                <th>:</th>
                <td>
                    <?php echo " " . $pekerja; ?>
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td>
                    <?php echo " " . $jk; ?>
                </td>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <th>:</th>
                <td>
                    <?php echo " " . $pendidikan; ?>
                </td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <th>:</th>
                <td>
                    <?php echo " " . $jabatan; ?>
                </td>
            </tr>
            <tr>
                <th>Gaji</th>
                <th>:</th>
                <td>
                    <?php echo " " . "Rp. " . $gaji; ?>
                </td>
            </tr>
            <tr>
                <th>
                    <h3 style="padding: 10px;">
                        <em>
                            Tunjangan <br>
                        </em>
                    </h3>
                </th>
            </tr>
            
            <tr>
                <th>Tunjangan Pendidikan</th>
                <th>:</th>
                <td>
                    <?php echo " " . "Rp. " . $tunjangan; ?>
                </td>
            </tr>
            <tr>
                <th>Vakasi Lembur</th>
                <th>:</th>
                <td>
                    <?php echo " " . "Rp. " . $lembur; ?>
                </td>
            </tr>
            <tr>
                <th>Bonus Status Kerja</th>
                <th>:</th>
                <td>
                    <?php echo " " . "Rp. " . $bonus; ?>
                </td>
            </tr>
            <tr>
                <th>
                    <h3 style="padding: 10px;">
                        <em>
                            Potongan
                        </em>
                    </h3>
                </th>
            </tr>
            <tr>
                <th>Potongan BPJS</th>
                <th>:</th>
                <td>
                    <?php echo " " . "Rp. " . $bpjs; ?>
                </td>
            </tr>
            <tr>
                <th><h3 style="padding: 10px;"><em>Total Gaji</em></h3></th>
                <th><h3><em>:</em></h3></th>
                <th>
                    <h3>
                        <em><?php echo " " . "Rp. " . $tgaji; ?></em>
                    </h3>
                </th>
            </tr>
        </table>
        <p style="text-align:right; padding-right:15px;">
        Bendahara : <?php echo $bendahara; ?>
        </p>
        </div>
    </div>
    <footer class="bg-light text-center text-lg-start" style="margin-top:50px">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #3b5998;">
        <p class="text-white">© 2021 Copyright</p>
    </div>
    <!-- Copyright -->
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>