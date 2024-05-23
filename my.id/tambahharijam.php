<?php
include('koneksi.php');
if (isset($_POST["nambah"])) {
    $jumlah = count($_POST['hari']);
    for ($i = 0; $i < $jumlah; $i++) {
        $id_dokter = $_POST['id_dokter'][$i];
        $hari = $_POST['hari'][$i];
        $query_sql = "INSERT INTO tb_hari(hari, id_dokter) VALUES('$hari', '$id_dokter')";
        mysqli_query($koneksi, $query_sql);
    }
}
if (isset($_POST["nambah"])) {
    $jam = count($_POST['jam_praktek']);
    for ($x = 0; $x < $jam; $x++) {
        $id_dokter = $_POST['id_dokter'][$x];
        $jam_praktek = $_POST['jam_praktek'][$x];
        $query_sql = "INSERT INTO tb_jam_praktek(jam_praktek, id_dokter) VALUES('$jam_praktek', '$id_dokter')";
        mysqli_query($koneksi, $query_sql);
    }
}

if ($query_sql) {
    echo "<script>
    alert('Tambah Data Sukses');
    document.location='admin_dokter.php';
    </script>";
} else {
    echo  "<script>
    alert('Tambah Data Gagal');
    document.location='admin_dokter.php';
    </script>";
}
/* --- edit Dokter ----*/
