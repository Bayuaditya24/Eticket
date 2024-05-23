<?php
$servername = "localhost";
$database   = "db_linktree";
$username   = "admin_linktree";
$password   = "f+7@aNP&-pBd";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi Gagal : ");
} else {
    echo "";
}
?>