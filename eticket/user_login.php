<?php
 session_start();
require 'conection.php';
if(isset($_POST["login"])) {
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tb_login_user
                WHERE  username = '$username' AND password = '$password'";

$login = mysqli_query($conection, $query_sql);
$cek=mysqli_num_rows($login); 
$data_login=mysqli_fetch_array($login);

if ($cek == 1){
    $_SESSION["username"]=$data_login['username'];
    $_SESSION["password"]=$data_login['password'];
    $_SESSION["id_user"]=$data_login['id_user'];
    $_SESSION["nama_lengkap"]=$data_login['nama_lengkap'];
    $_SESSION["unit"]=$data_login['unit'];
    $_SESSION["login"] = true;
    header("Location:home_user.php");
    exit;
} else {
   header("Location:index.php?pesan=gagal");
}
}
?>
