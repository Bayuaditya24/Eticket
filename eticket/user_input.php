<?php
require 'conection.php';
if (isset($_POST['submit'])=="add"){
$id_user = $_POST["id_user"];
$nama = $_POST["nama"];
$unit = $_POST["unit"];
$tempat = $_POST["tempat"];
$tanggal = $_POST["tanggal"];
$waktu = $_POST["waktu"];
$kategori = $_POST["kategori"];
$kerusakan = $_POST["kerusakan"];


$query_sql = "INSERT INTO tb_input_user (id_user, nama, unit, tempat, tanggal, waktu, kategori, kerusakan)
                VALUES ('$id_user', '$nama', '$unit', '$tempat', '$tanggal', '$waktu', '$kategori', '$kerusakan')";
                
if(mysqli_query($conection, $query_sql)) {
    session_start();
    $_SESSION['eksekusi']="Berhasil";
    header("Location: my_ticket.php");
    
$token = "f#B!k2cwGyH+sgmggdXv";
$target = "6283114548323,6282146813321";
$pesan = "Eticket masuk dari $_SESSION[username] unit $_SESSION[unit]";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
'target' => $target,
'message' => $pesan,
),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
} else {
    echo "Pelaporan Gagal : " . mysqli_error($conection);
}
}
?>