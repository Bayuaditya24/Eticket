<?php
require 'conection.php';
if(isset($_POST["register"])) {
$nama_lengkap = $_POST["nama_lengkap"];
$email = $_POST["email"];
$unit = $_POST["unit"];
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tb_login_user (nama_lengkap, email, unit, username, password)
                VALUES ('$nama_lengkap', '$email', '$unit', '$username', '$password')";

if(mysqli_query($conection, $query_sql)) {
    header("Location:index.php");
    
} else {
    echo "Register Gagal : " . mysqli_error($conection);
}
}
?>