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
    <center>
        <h3 style="padding: 10px">Penggajihan Karyawan</h3>
        <h1>PT. Selalu Makmur Jaya</h1>
    </center>
    <div class="row">
        <div class="col-8">
            <form action="proses_soal.php" method="get">
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Bendahara</label>
                    <div class="col-sm">
                        <input type="text" name="bendahara" class="form-control" id="colFormLabel">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Pekerja</label>
                    <div class="col-sm">
                        <input type="text" name="pekerja" class="form-control" id="colFormLabel">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
                            <label class="form-check-label">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                            <label class="form-check-label">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Gaji</label>
                    <div class="col-sm">
                        <input type="date" name="tg" class="form-control" id="colFormLabel">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="formGroupExampleInput" class="form-label">Jabatan</label>
                    <div class="col-sm">
                        <select class="form-select" aria-label="Default select example" name="jabatan">
                            <option>--- Pilih Jabatan ---</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Manager">Manager</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="OB">OB</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="formGroupExampleInput" class="form-label">Pendidikan Terakhir</label>
                    <div class="col-sm">
                        <select class="form-select" aria-label="Default select example" name="pendidikan">
                            <option>--- Pendidikan Terakhir ---</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Status Pegawai</label>
                    <div class="col-sm">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Tetap" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Tetap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Kontrak" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Kontrak
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Lembur</label>
                    <div class="col-sm">
                        <input type="text" name="hari" class="form-control" id="colFormLabel">
                    </div>
                    Hari / Rp. 20.000
                </div>
                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Potongan BPJS</label>
                    <div class="col-sm">
                        <input type="text" name="bpjs" class="form-control" id="colFormLabel">
                    </div>
                </div>
                <input type="submit" class="btn-check" id="btn-check-2" checked autocomplete="off" name="save">
                <label class="btn btn-primary" for="btn-check-2">Kirim</label>
            </form>
        </div>
    <div class="col-4">
    </div>
  </div>
  <footer class="bg-light text-center text-lg-start" style="margin-top:40px">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #3b5998;">
        <p class="text-white">© 2021 Copyright</p>
    </div>
    <!-- Copyright -->
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>