<?php
session_start();
include("conection.php");
if (!isset($_SESSION["login"])) {
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
                            <?php echo $_SESSION['username']; ?>
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
                <h3>INPUT PELAPORAN IPSRS</h3>
            </div>
            <div class="card-body">
                <form action="ipsrs_input.php" method="post">
                    <div class="form-group">
                        <label for="nama_ipsrs">NAMA</label>
                        <input value="<?php echo $_SESSION['nama_lengkap']; ?>" type="text" class="form-control" name="nama_ipsrs" id="nama_ipsrs" placeholder="Masukkan Nama" required style="text-transform: uppercase;">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="unit_ipsrs">UNIT</label>
                                <input value="<?php echo $_SESSION['unit']; ?>" type="text" name="unit_ipsrs" class="form-control col-8" id="unit_ipsrs" placeholder="Masukkan Unit" required style="text-transform: uppercase;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_ipsrs">TEMPAT</label>
                                <input type="text" name="tempat_ipsrs" class="form-control col-8" id="tempat_ipsrs" placeholder="Masukkan Tempat" required style="text-transform: uppercase;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_ipsrs">TANGGAL</label>
                                <input type="date" name="tanggal_ipsrs" class="form-control col-8" id="tanggal_ipsrs" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="waktu_ipsrs">WAKTU</label>
                                <input type="time" name="waktu_ipsrs" class="form-control col-8" id="waktu_ipsrs" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kategori_ipsrs">KATEGORI</label>
                        <select type="text" name="kategori_ipsrs" id="kategori_ipsrs" class="form-control col-8">
                            <option>PILIH KATEGORI</option>
                            <option value="AC">AC</option>
                            <option value="TV">TV</option>
                            <option value="Telepon">Telepon</option>
                            <option value="Dispencer">Dispencer</option>
                            <option value="CCTV">CCTV</option>
                            <option value="Lampu">Lampu</option>
                            <option value="Piting">Piting</option>
                            <option value="Stop Kontak">Stop Kontak</option>
                            <option value="Panel">Panel</option>
                            <option value="Lift">Lift</option>
                            <option value="Genset/ATS">Genset/ATS</option>
                            <option value="Listrik">Listrik</option>
                            <option value="Pompa Air">Pompa Air</option>
                            <option value="Kran Air">Kran Air</option>
                            <option value="Alat Medis">Alat Medis</option>
                            <option value="Bed Pasien">Bed Pasien</option>
                            <option value="Tensi">Tensi</option>
                            <option value="Komputer">Komputer</option>
                            <option value="Generator">Generator</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>KERUSAKAN/KELUHAN</label>
                        <textarea class="form-control" name="kerusakan_ipsrs" rows="5" required style="text-transform: capitalize;"></textarea>
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