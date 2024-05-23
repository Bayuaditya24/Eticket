<?php
session_start();
include("conection.php"); 
$id_user = $_GET["id_user"];
$query_sql = "SELECT * FROM tb_login_user WHERE id_user='$id_user'";
$data = mysqli_query($conection, $query_sql);
if ( !isset($_SESSION["login"]) ) {
    header("Location: index.php");
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
                        <?php echo $_SESSION['username'];?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home_user.php">
                        <i class="bi bi-house-door mr-1"></i>
                        <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class="bi bi-book mr-2"></i>Dashboard</a>
                        <div class="dropdown-menu bg-dark" style="border: none;">
                            <a class="dropdown-item bg-dark" href="my_ticket.php" style="color: white;">
                                <i class="bi bi-ticket mr-2"></i>My Ticket</a>
                            <a class="dropdown-item bg-dark" href="dashboard_user.php" style="color: white;">
                                <i class="bi bi-pc-display-horizontal mr-2"></i>Dashboard IT</a>
                            <a class="dropdown-item bg-dark" href="dashboard_ipsrs.php" style="color: white;">
                                <i class="bi bi-tools mr-2"></i>Dashboard IPSRS</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class="bi bi-pencil-square mr-2"></i>Input</a>
                        <div class="dropdown-menu bg-dark" style="border: none;">
                            <a class="dropdown-item bg-dark" href="input_user.php" style="color: white;">
                                <i class="bi bi-pc-display-horizontal mr-2"></i>Input IT</a>
                            <a class="dropdown-item bg-dark" href="input_ipsrs.php" style="color: white;">
                                <i class="bi bi-tools mr-2"></i>Input IPSRS</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                        <i class="bi bi-power mr-1"></i>
                        <span>Logout</span>
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
                <h3>INPUT PELAPORAN IT</h3>
            </div>
            <div class="card-body">
                <form action="user_input.php" method="post">
                    <div class="form-group">
                           <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'];?>" >
                        <label for="nama">NAMA</label>
                        <input value="<?php echo $_SESSION['nama_lengkap'];?>" type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required style="text-transform: uppercase;">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="unit">UNIT</label>
                                <input value="<?php echo $_SESSION['unit'];?>"  type="text" name="unit" class="form-control col-8" id="unit" placeholder="Masukkan Unit" required style="text-transform: uppercase;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat">TEMPAT</label>
                                <input type="text" name="tempat" class="form-control col-8" id="tempat" placeholder="Masukkan Tempat" required style="text-transform: uppercase;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal">TANGGAL</label>
                                <input type="date" name="tanggal" class="form-control col-8" id="tanggal" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="waktu">WAKTU</label>
                                <input type="time" name="waktu" class="form-control col-8" id="waktu" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kategori">KATEGORI</label>
                        <select type="text" name="kategori" id="kategori" class="form-control col-8">
                            <option>PILIH KATEGORI</option>
                            <option value="SIMRS">SIMRS</option>
                            <option value="Komputer">Komputer</option>
                            <option value="Display Poli">Display Poli</option>
                            <option value="Display Farmasi">Display Farmasi</option>
                            <option value="Internet">Internet</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>KERUSAKAN/KELUHAN</label>
                        <textarea class="form-control" name="kerusakan" rows="5" required style="text-transform: capitalize;"></textarea>
                    </div>
                    <button type="submit" name="submit" value="add" class="btn btn-primary mr-5">SIMPAN</button>
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
