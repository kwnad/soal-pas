<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Soal 1</title>
</head>
<body>
    <center><h1>Syarat Masuk Ke MIKO MALL</h1></center>
    <form action="" method="get">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Anda</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="nama">
                </div>
                <label for="formGroupExampleInput" class="form-label">Status Vaksin</label>
                <select class="form-select" aria-label="Default select example" name="status">
                    <option selected>--- Status Vaksin ---</option>
                    <option value="Sudah Vaksin">Sudah Vaksin</option>
                    <option value="Belum Vaksin">Belum Vaksin</option>
                </select>
                <input type="submit" class="btn-check" id="btn-check-2" checked autocomplete="off" name="save">
                <br>
                <label class="btn btn-primary" for="btn-check-2">Kirim</label>
            </div>
            <div class="col"></div>
        </div>
    </form>

    <?php
    if (isset($_GET['save'])) {
        $nama = $_GET['nama'];
        echo "<hr>";
        echo "<center>Nama Anda : $nama <br></center>";
        $status = $_GET['status'];
        echo "<center>Status Vaksin : $status <br></center>";
        echo "<br>";

        if ($status == "Sudah Vaksin") {
            echo "<center><b>Diizinkan</b></center>";
        } else if ($status == "Belum Vaksin") {
            echo "<center><em><b>Tidak Diizinkan</b></em></center>";
            echo "<br>";
            echo "<center><a href=https://www.pedulilindungi.id>Silahkan Daftar Vaksin</a></center>";
        }
    }
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>