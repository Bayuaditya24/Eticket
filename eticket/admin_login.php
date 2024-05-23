<?php
 session_start();
require 'conection.php';
$username_admin = $_POST["username_admin"];
$password_admin = $_POST["password_admin"];

$query_sql = "SELECT * FROM tb_login_admin
                WHERE username_admin = '$username_admin' AND password_admin = '$password_admin'";

$login_admin = mysqli_query($conection, $query_sql);
$cek=mysqli_num_rows($login_admin); 
$data_login=mysqli_fetch_array($login_admin);

if ($cek == 1){
    $_SESSION["username_admin"]=$username_admin;
    $_SESSION["id_admin"]=$id_admin;
    $_SESSION["login_admin"] = true;
    header("Location:home_admin.php");
    exit;
} else {
   header("Location:login_admin.php?pesan=gagal");
}
?>
