<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Soal 3</title>
</head>
<body>
    <center><h1 style="padding: 10px;">Form Pengulangan</h1></center>
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <form action="" method="get">
                <div class="row mb-3">
                    <ul class="list-group">
                        <li class="list-group-item">1. Deret Bilangan Ganjil</li>
                        <li class="list-group-item">2. Segitiga Sama Kaki Terbalik</li>
                        <li class="list-group-item">3. Deret Bilangan Kelipatan 3</li>
                    </ul>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Pilih</label>
                    <div class="col-sm">
                        <input type="text" name="pilih" class="form-control" id="colFormLabel">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Masukkan Angka</label>
                    <div class="col-sm">
                        <input type="number" name="angka" class="form-control" id="colFormLabel">
                    </div>
                </div>
                <input type="submit" class="btn-check" id="btn-check-2" checked autocomplete="off" name="save">
                <label class="btn btn-primary" for="btn-check-2">Kirim</label>
                
            </form>
        </div>
        <div class="col-2">
        </div>
    </div>
    
    <?php
    if (isset($_GET['save'])) {
        $pilih = $_GET['pilih'];
        $angka = $_GET['angka'];

        if ($pilih == 1) { 
            echo "<center>";
            echo "<h3>Deret Bilangan Ganjil</h3>";
            for ($i = 1; $i <= $angka; $i+=2) {
                echo "<b style=font-size:30px>$i</b>" . " ";
            }
        } else if ($pilih == 2) {
            echo "<center>";
            echo "<h3>Segitiga Sama Kaki Terbalik</h3>";
            for ($i = $angka; $i >= 1; $i--) {
                for ($a = $angka; $a > $i; $a--) {
                    echo " ";
                }
                for ($b = 1; $b <= $i; $b++) {
                    echo "<b>*</b>";
                }
                echo "<br>";
            }
        } else if ($pilih == 3) {
            echo "<center>";
            echo "<h3>Deret Bilangan Kelipatan 3</h3>";
            for ($i = 3; $i <= $angka; $i+=3) {
                echo "<b style=font-size:30px>$i</b>" . " ";
            }
        }
    }
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>