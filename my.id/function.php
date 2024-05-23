<?php
/* tambah poli */
include("koneksi.php");
if (isset($_POST['submit'])) {
    $namapoli = $_POST["namapoli"];
    $query_sql = "INSERT INTO tb_poli (namapoli)
                VALUES ('$namapoli')";
    if (mysqli_query($koneksi, $query_sql)) {
        header("Location: admin_poli.php");
    } else {
        echo "Pelaporan Gagal : " . mysqli_error($koneksi);
    }
}
/* tambah poli */

/* tambah dokter */
include("koneksi.php");
if (isset($_POST['save'])) {
    $nama_dokter = $_POST["nama_dokter"];
    $id_poli = $_POST["id_poli"];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp, 'foto_dr/' . $foto);
    $query_sql = "INSERT INTO tb_dokter (nama_dokter,  foto, id_poli)
                VALUES ('$nama_dokter', '$foto', '$id_poli')";

    if (mysqli_query($koneksi, $query_sql)) {
        header("Location: admin_dokter.php");
    } else {
        echo "Pelaporan Gagal : " . mysqli_error($koneksi);
    }
    /* --- Tambah  Dinamis ----*/
    if ($query_sql) {
        $id_dokter = mysqli_insert_id($koneksi);
        $jumlah = count($_POST['hari']);
        for ($i = 0; $i < $jumlah; $i++) {
            $hari = $_POST['hari'][$i];
            $query_sql = "INSERT INTO tb_hari(hari, id_dokter) VALUES('$hari', '$id_dokter')";
            mysqli_query($koneksi, $query_sql);
        }

        $jam = count($_POST['jam_praktek']);
        for ($i = 0; $i < $jam; $i++) {
            $jam_praktek = $_POST['jam_praktek'][$i];
            $query_sql = "INSERT INTO tb_jam_praktek(jam_praktek, id_dokter) VALUES('$jam_praktek', '$id_dokter')";
            mysqli_query($koneksi, $query_sql);
        }
    }

    /* --- Tambah  Dinamis ----*/
}

/* tambah dokter */
