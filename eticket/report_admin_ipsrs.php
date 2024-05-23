<?php
session_start();
include("conection.php");
$tanggal_awal = "";
$tanggal_akhir = "";

if (!isset($_SESSION["login_admin"])) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    


    <title>Eticket RSU Ganesha</title>
    <style>
        body {
            background-color: #f5f5f5;
            background-size: cover;

        }

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
                            <?php
                            echo $_SESSION['username_admin']; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home_admin.php">
                            <i class="bi bi-house-door mr-1"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class="bi bi-book mr-2"></i>Dashboard</a>
                        <div class="dropdown-menu bg-dark" style="border: none;">
                            <a class="dropdown-item bg-dark" href="dashboard_admin.php" style="color: white;">
                                <i class="bi bi-pc-display-horizontal mr-2"></i>Dashboard IT</a>
                            <a class="dropdown-item bg-dark" href="dashboard_admin_ipsrs.php" style="color: white;">
                                <i class="bi bi-tools mr-2"></i>Dashboard IPSRS</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class="bi bi-journal-text mr-2"></i>Report</a>
                        <div class="dropdown-menu bg-dark" style="border: none;">
                            <a class="dropdown-item bg-dark" href="report_admin.php" style="color: white;">
                                <i class="bi bi-pc-display-horizontal mr-2"></i>Report IT</a>
                            <a class="dropdown-item bg-dark" href="report_admin_ipsrs.php" style="color: white;">
                                <i class="bi bi-tools mr-2"></i>Report IPSRS</a>
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
    <div class="container-fluid">
        <br>
        <br>
        <br>
        <div class="card mb-2" style="border: none; width: 100%; padding-left:20px; padding-top:20px; padding-right:20px; ">
            <div>
                <h2>DATA PELAPORAN IPSRS</h2>
                <br>
                <?php
       if (isset($_POST['filter'])) {
        $tanggal_awal = mysqli_real_escape_string($conection, $_POST['tanggal_awal']);
        $tanggal_akhir = mysqli_real_escape_string($conection, $_POST['tanggal_akhir']);
       
    }
                ?>
                <form method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>TANGGAL AWAL</label>
                                <input type="date" name="tanggal_awal" class="form-control col-10" required>
                                <br>
                                <td><?php echo "Dari Tanggal&emsp;".$tanggal_awal; ?></td>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>TANGGAL AKHIR</label>
                                <input type="date"name="tanggal_akhir" class="form-control col-10"  required>
                                <br>
                                <td><?php echo "Sampai Tanggal&emsp;".$tanggal_akhir; ?></td>
                            </div>
                        </div>
                        <button type="submit" name="filter" value="filter" class="btn btn-primary ml-3" style="height: 40px; margin-top:30px;">TAMPILKAN</button>
                    </div>
                </form>
                <br>
            </div>
            <div class="table-responsive mb-5">
                <table class="table table-bordered" id="example">
                    <thead style="margin-bottom: 30px;" class="thead bg-primary  text-white text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Tempat</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Kerusakan/Keluhan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Selesai</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "conection.php";
                        $no = 1;
                        if (isset($_POST['filter'])) {
                            $tanggal_awal = mysqli_real_escape_string($conection, $_POST['tanggal_awal']);
                            $tanggal_akhir = mysqli_real_escape_string($conection, $_POST['tanggal_akhir']);
                            $data = mysqli_query($conection, "SELECT * FROM tb_input_ipsrs WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
                           
                        } else {
                            $data = mysqli_query($conection, "SELECT * FROM tb_input_ipsrs ORDER BY tanggal_ipsrs DESC");
                        }
                        while ($hasil = mysqli_fetch_assoc($data)) {
                            echo "
                        <tr style='text-transform: capitalize;'>
                        <td>$no</td>
                            <td>$hasil[nama_ipsrs]</td>
                            <td style='text-transform: uppercase;'>$hasil[unit_ipsrs]</td>
                            <td>$hasil[tempat_ipsrs]</td>
                            <td>$hasil[tanggal_ipsrs]</td>
                            <td>$hasil[waktu_ipsrs]</td>
                            <td>$hasil[kategori_ipsrs]</td>
                            <td>$hasil[kerusakan_ipsrs]</td>
                            <td>$hasil[status_ipsrs]</td>
                            <td>$hasil[tanggal_selesai_ipsrs]</td>
                            <td>$hasil[keterangan_ipsrs]</td>
                      
                        </tr>";
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
                <div class="form-group">
            <a href="cetak_ipsrs.php?tanggal_awal=<?php echo $tanggal_awal; ?>&&tanggal_akhir=<?php echo $tanggal_akhir; ?>" target="_blank" class="btn btn-success">Cetak Laporan</a>
        </div>
            </div>
        </div>
    </div>
    <!-- #main content -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();

        });
    </script>
</body>

</html>