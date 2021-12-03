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
<body>
    <center>
        <h2>Struk Gaji Karyawan</h2>
        <hr>
    </center>
    <p style="text-align:right">
    Tanggal : <?php echo $tg; ?>
    </p>
    <b><em>Gaji Pokok</em></b>
    <br>
    <br>
    <table>
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
                <?php echo " " . $gaji; ?>
            </td>
        </tr>
    </table>

    <br>
    <b><em>Tunjangan</em></b>
    <br>
    <table>
        <tr>
            <th>Tunjangan Pendidikan</th>
            <th>:</th>
            <td>
                <?php echo " " . $tunjangan; ?>
            </td>
        </tr>
        <tr>
            <th>Vakasi Lembur</th>
            <th>:</th>
            <td>
                <?php echo " " . $lembur; ?>
            </td>
        </tr>
        <tr>
            <th>Bonus Status Kerja</th>
            <th>:</th>
            <td>
                <?php echo " " . $bonus; ?>
            </td>
        </tr>
    </table>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>