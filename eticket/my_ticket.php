<?php
session_start();
include("conection.php"); 
$id_user = $_SESSION["id_user"];
$query_sql = "SELECT * FROM tb_input_user WHERE id_user='$id_user'";
$data = mysqli_query($conection, $query_sql);
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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.bootstrap4.min.css">

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
        .dataTables_scrollHeadInner table.table-bordered tr th {
            background-color: #607d8b;
        }

        .dataTables_paginate .paginate_button.page-item.active a {
            background-color: #607d8b;
            border-color: #607d8b;
        }

        .dataTables_paginate .paginate_button.page-item:not(.active) a {
            color: #607d8b;
            border-color: #607d8b;
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
                            echo $_SESSION['username']; ?>
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
    <div class="container-fluid">
        <br>
        <br>
        <br>
        <?php
        if (isset($_SESSION["eksekusi"])) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Data Berhasil Ditambahkan</strong>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button></div>" ;
            unset($_SESSION["eksekusi"]);

        }
        ?>
        <div class="card mb-2" style="border: none; width: 100%; padding-left:20px; padding-top:20px; padding-right:20px; ">
        <div>
            <h2>MY TICKET</h2>
            <br>
        </div>
            <div class="table-responsive mb-5">
                <table id="example" class="display nowrap table table-striped table-bordered" style="width:100%">
                    <thead style="margin-bottom: 30px;" class="thead bg-primary text-white text-center">
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
                        $data = mysqli_query($conection, "SELECT * FROM tb_input_user  WHERE id_user='$id_user' ORDER BY tanggal DESC");
                        while ($hasil = mysqli_fetch_assoc($data)) {
                            echo "
                        <tr style='text-transform: capitalize;'>
                        <td>$no</td>
                            <td>$hasil[nama]</td>
                            <td style='text-transform: uppercase;'>$hasil[unit]</td>
                            <td >$hasil[tempat]</td>
                            <td>$hasil[tanggal]</td>
                            <td>$hasil[waktu]</td>
                            <td>$hasil[kategori]</td>
                            <td>$hasil[kerusakan]</td>
                            <td>$hasil[status_]</td>
                            <td>$hasil[tanggal_selesai]</td>
                            <td style='text-transform: none;'>$hasil[keterangan]</td>
                      
                        </tr>";
                        $no++;
                        }
                        ?>
                    </tbody>
                </table>
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
    <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 5000);
    </script>
    
     <script type="text/javascript">
$('#example').DataTable({
            fixedColumns: {
               
            },
           
            scrollY: '300px',
            scrollX: true
        });


    </script>
</body>

</html>