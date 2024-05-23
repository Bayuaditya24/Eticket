<?php
session_start();
include "conection.php"; 

$id_ipsrs = $_GET["id_ipsrs"];
$query_sql = "SELECT * FROM tb_input_ipsrs WHERE id_ipsrs='$id_ipsrs'";
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
                <h3>Action Admin IPSRS</h3>
            </div>
            <div class="card-body">
                <form action="admin_action_ipsrs.php" method="post">
                    <input type="hidden" name="id_ipsrs" value="<?= $hasil["id_ipsrs"];?>" >
                    <div class="form-group">
                        <label for="nama_ipsrs">NAMA</label>
                        <input type="text" value="<?= $hasil["nama_ipsrs"];?>" class="form-control" name="nama_ipsrs" id="nama_ipsrs" placeholder="Masukkan Nama" disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="unit_ipsrs">UNIT</label>
                                <input type="text" value="<?= $hasil["unit_ipsrs"]; ?>" name="unit_ipsrs" class="form-control col-8" id="unit_ipsrs" placeholder="Masukkan Unit" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat-IPSRS">TEMPAT</label>
                                <input type="text" value="<?= $hasil["tempat_ipsrs"]; ?>" name="tempat_ipsrs" class="form-control col-8" id="tempat_ipsrs" placeholder="Masukkan Tempat" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggalipsrs">TANGGAL</label>
                                <input type="date" value="<?= $hasil["tanggal_ipsrs"]; ?>" name="tanggal_ipsrs" class="form-control col-8" id="tanggal_ipsrs" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="waktu_ipsrs">WAKTU</label>
                                <input type="time" value="<?= $hasil["waktu_ipsrs"]; ?>" name="waktu_ipsrs" class="form-control col-8" id="waktu_ipsrs" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kategori_ipsrs">KATEGORI</label>
                        <select name="kategori_ipsrs" id="kategori_ipsrs" class="form-control col-8" disabled>
                            <option value="<?=$hasil["kategori_ipsrs"];?>"><?= $hasil["kategori_ipsrs"];?></option>
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label>KERUSAKAN/KELUHAN</label>
                        <textarea class="form-control" name="kerusakan_ipsrs" rows="5" disabled value="<?=$hasil["kerusakan_ipsrs"];?>"><?= $hasil["kerusakan_ipsrs"];?></textarea>
                    </div>

                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="status_ipsrs">STATUS</label>
                        <select name="status_ipsrs" id="status_ipsrs" class="form-control col-8">
                        <option value="<?=$hasil["status_ipsrs"];?>"><?= $hasil["status_ipsrs"];?></option>
                            <option value="Menunggu">Menunggu</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_selesai_ipsrs">TANGGAL SELESAI</label>
                                <input type="date" value="<?= $hasil["tanggal_selesai_ipsrs"]; ?>" name="tanggal_selesai_ipsrs" class="form-control col-8" id="tanggal_selesai">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>KETERANGAN</label>
                        <textarea class="form-control" name="keterangan_ipsrs" rows="3" style="text-transform: uppercase;" value="<?=$hasil["keterangan_ipsrs"];?>"><?=$hasil["keterangan_ipsrs"];?></textarea>
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