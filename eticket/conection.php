<?php
$servername = "localhost";
$database   = "eticket_rsuganesha";
$username   = "admin_eticket";
$password   = "G9YkaYj247Bf";

$conection = mysqli_connect($servername, $username, $password, $database);

if (!$conection) {
    die("Koneksi Gagal : ");
} else {
    echo "";
}