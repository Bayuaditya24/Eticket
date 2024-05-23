<?php
session_start();
include "conection.php"; 

$id_input = $_GET["id_input"];
$query_sql = "SELECT * FROM tb_input_user WHERE id_input='$id_input'";
$data = mysqli_query($conection, $query_sql);
while ($hasil = mysqli_fetch_assoc($data)) {

if ( !isset($_SESSION["login_admin"]) ) {
    header("Location: login_admin.php");
    exit;
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Eticket RSU Ganesha</title>
    <style>
        
        ul li {
            margin-left: 5px;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <!-- #navbar atas -->
    <div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Eticket</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" style="color: white;">
                        <i class="bi bi-person mr-1"></i>
                        <?php echo $_SESSION['username_admin'];?>
                        </a>
                    </li>
                
                </ul>
            </div>
        </nav>
    </div>
    <!-- #navbar atas -->

    <!-- #main content -->
    <div class="container">
        <div class="card">
            <div class="card-header text-white" style="background-color:#607d8b;">
                <h3>Action Admin</h3>
            </div>
            <div class="card-body">
                <form action="admin_action.php" method="post">
                    <input type="hidden" name="id_input" value="<?= $hasil["id_input"];?>" >
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" value="<?= $hasil["nama"];?>" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="unit">UNIT</label>
                                <input type="text" value="<?= $hasil["unit"]; ?>" name="unit" class="form-control col-8" id="unit" placeholder="Masukkan Unit" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat">TEMPAT</label>
                                <input type="text" value="<?= $hasil["tempat"]; ?>" name="tempat" class="form-control col-8" id="tempat" placeholder="Masukkan Tempat" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal">TANGGAL</label>
                                <input type="date" value="<?= $hasil["tanggal"]; ?>" name="tanggal" class="form-control col-8" id="tanggal" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="waktu">WAKTU</label>
                                <input type="time" value="<?= $hasil["waktu"]; ?>" name="waktu" class="form-control col-8" id="waktu" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kategori">KATEGORI</label>
                        <select name="kategori" id="kategori" class="form-control col-8" disabled>
                            <option value="<?=$hasil["kategori"];?>"><?= $hasil["kategori"];?></option>
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label>KERUSAKAN/KELUHAN</label>
                        <textarea class="form-control" name="kerusakan" rows="5" disabled value="<?=$hasil["kerusakan"];?>"><?= $hasil["kerusakan"];?></textarea>
                    </div>

                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="status_">STATUS</label>
                        <select name="status_" id="status_" class="form-control col-8">
                        <option value="<?=$hasil["status_"];?>"><?= $hasil["status_"];?></option>
                            <option value="Menunggu">Menunggu</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_selesai">TANGGAL SELESAI</label>
                                <input type="date" value="<?= $hasil["tanggal_selesai"]; ?>" name="tanggal_selesai" class="form-control col-8" id="tanggal_selesai">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>KETERANGAN</label>
                        <textarea class="form-control" name="keterangan" rows="3"  value="<?=$hasil["keterangan"];?>"><?=$hasil["keterangan"];?></textarea>
                    </div>
                    <button type="submit" name="submit" value="edit" class="btn btn-primary mr-5">UPDATE</button>
                    <button type="reset" name="hapus" class="btn btn-danger">RESET</button>

                </form>
            </div>
        </div>
    </div>
    <!-- #main content -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
<?php 
}
?>