<?php
include("koneksi.php");
$id_poli = $_GET['id_poli'];

$query_dokter = mysqli_query($koneksi, "SELECT * FROM tb_dokter WHERE id_poli='$id_poli'");
echo "<option>Pilih Dokter</option>";
while ($dokter = mysqli_fetch_array($query_dokter)) {
    echo "<option class:'gap-2' value=$dokter[id_dokter]> $dokter[nama_dokter] </option>";
}
