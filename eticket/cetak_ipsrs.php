<?php
session_start();
include("conection.php");
$tanggal_awal = $_GET['tanggal_awal'];
$tanggal_akhir= $_GET['tanggal_akhir'];

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

<body onload="print()">
    <!-- #navbar atas -->
    
    <!-- #navbar atas -->

    <!-- #main content -->
    <div class="container-fluid">
        <br>
       
        <div class="card mb-2" style="border: none; padding-left:20px; padding-top:20px; padding-right:20px; ">
            <div >
                <h2 class="text-center">DATA PELAPORAN IPSRS</h2>
                <br></br>
               
            </div>
            <div class="table mb-5">
                <table class="table table-bordered">
                    <thead style="margin-bottom: 30px;" class="thead thead-light  text-white text-center">
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
                     
                        $data = mysqli_query($conection, "SELECT * FROM tb_input_ipsrs WHERE tanggal_ipsrs BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
                        
                        while ($hasil = mysqli_fetch_assoc($data)) {
                            echo "
                        <tr>
                        <td>$no</td>
                            <td>$hasil[nama_ipsrs]</td>
                            <td>$hasil[unit_ipsrs]</td>
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
                <div class="row ml-1">
                       
                       <div class="form-group">
                           <td><?php echo "Dari Tanggal&ensp;".$tanggal_awal; ?></td>
                       </div>
                   
                  
                       <div class="form-group">
                           <td><?php echo "&emsp;&emsp;Sampai Tanggal&ensp;".$tanggal_akhir; ?></td>
                       </div>
                  
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
</body>

</html>