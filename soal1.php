<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Soal 1</title>
</head>
<body style="background-color: lightsteelblue">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="soal1.php">Soal 1</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="soal2.php">Soal 2</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="soal3.php">Soal 3</a>
            </li>
        </div>
    </div>
    </nav>
    <div class="card border-dark mb-3 container" style="width: 40rem; margin-top:50px;">
        <div class="card-body">
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

        </div>
    </div>
    <footer class="bg-light text-center text-lg-start" style="margin-top:139px">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #3b5998;">
        <p class="text-white">© 2021 Copyright</p>
    </div>
    <!-- Copyright -->
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>