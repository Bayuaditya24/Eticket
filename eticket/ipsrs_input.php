<?php
   require 'conection.php';
    if (isset($_POST['submit'])) {
        $nama_ipsrs = $_POST["nama_ipsrs"];
        $unit_ipsrs = $_POST["unit_ipsrs"];
        $tempat_ipsrs = $_POST["tempat_ipsrs"];
        $tanggal_ipsrs = $_POST["tanggal_ipsrs"];
        $waktu_ipsrs = $_POST["waktu_ipsrs"];
        $kategori_ipsrs = $_POST["kategori_ipsrs"];
        $kerusakan_ipsrs = $_POST["kerusakan_ipsrs"];


        $query_sql = "INSERT INTO tb_input_ipsrs (nama_ipsrs, unit_ipsrs, tempat_ipsrs, tanggal_ipsrs, waktu_ipsrs, kategori_ipsrs, kerusakan_ipsrs)
                VALUES ('$nama_ipsrs', '$unit_ipsrs', '$tempat_ipsrs', '$tanggal_ipsrs', '$waktu_ipsrs', '$kategori_ipsrs', '$kerusakan_ipsrs')";

        if (mysqli_query($conection, $query_sql)) {
            session_start();
            $_SESSION['eksekusi'] = "Berhasil";
            header("Location: dashboard_ipsrs.php");
        } else {
            echo "Pelaporan Gagal : " . mysqli_error($conection);
        }
    }
    ?>