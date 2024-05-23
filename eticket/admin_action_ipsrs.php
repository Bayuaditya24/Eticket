<?php 
    require 'conection.php';
    if (isset($_POST["submit"])) {
    if($_POST["submit"]=="edit") 
    $id_ipsrs = $_POST["id_ipsrs"];
    $status_ipsrs = $_POST["status_ipsrs"];
    $tanggal_selesai_ipsrs = $_POST["tanggal_selesai_ipsrs"];
    $keterangan_ipsrs = $_POST["keterangan_ipsrs"];
    
    
    $query_sql = "UPDATE tb_input_ipsrs
                SET id_ipsrs='$id_ipsrs', status_ipsrs='$status_ipsrs', tanggal_selesai_ipsrs='$tanggal_selesai_ipsrs', keterangan_ipsrs='$keterangan_ipsrs'
                WHERE id_ipsrs='$id_ipsrs';";
    
    if(mysqli_query($conection, $query_sql)) {
        session_start();
        $_SESSION['eksekusi_admin_ipsrs']="Berhasil";
        header("Location: dashboard_admin_ipsrs.php");
    } else {
        echo "Pelaporan Gagal : " . mysqli_error($conection);
    }
    };
    ?>