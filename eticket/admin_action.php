<?php
require 'conection.php';
if (isset($_POST["submit"])) {
if($_POST["submit"]=="edit") 
$id_input = $_POST["id_input"];
$status_ = $_POST["status_"];
$tanggal_selesai = $_POST["tanggal_selesai"];
$keterangan = $_POST["keterangan"];


$query_sql = "UPDATE tb_input_user
            SET id_input='$id_input', status_='$status_', tanggal_selesai='$tanggal_selesai', keterangan='$keterangan'
            WHERE id_input='$id_input';";

if(mysqli_query($conection, $query_sql)) {
    session_start();
    $_SESSION['eksekusi_admin']="Berhasil";
    header("Location: dashboard_admin.php");
} else {
    echo "Pelaporan Gagal : " . mysqli_error($conection);
}
}
?>