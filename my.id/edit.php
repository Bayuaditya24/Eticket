<?php
include("koneksi.php");
/* --- edit Poli ----*/
if (isset($_POST["edit"])) {
    $id_poli = $_POST["id_poli"];
    $namapoli = $_POST["namapoli"];
    $query_sql = "UPDATE tb_poli SET namapoli = '$namapoli'
                WHERE id_poli = '$id_poli';";
    if (mysqli_query($koneksi, $query_sql)) {
        echo "<script>
            alert('Edit Data Sukses');
            document.location='admin_poli.php';
            </script>";
    } else {
        echo  "<script>
            alert('Edit Data Gagal');
            document.location='admin_poli.php';
            </script>";
    }
}
/* --- edit Poli ----*/
