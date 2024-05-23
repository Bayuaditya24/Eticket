<?php
include("koneksi.php");
if (isset($_POST["hapus"])) {
    $query_sql = "DELETE FROM tb_poli
                WHERE id_poli = '$_POST[id_poli]'";
    if (mysqli_query($koneksi, $query_sql)) {
        echo "<script>
            alert('Hapus Data Sukses');
            document.location='admin_poli.php';
            </script>";
    } else {
        echo  "<script>
            alert('Hapus Data Gagal');
            document.location='admin_poli.php';
            </script>";
    }
}
/* --- Hapus Poli ----*/

/* --- Hapus Dokter ----*/
include("koneksi.php");
if (isset($_POST["hapusd"])) {
    $id_dokter = $_POST['id_dokter'];

    $query_show = "SELECT * FROM tb_dokter WHERE id_dokter='$id_dokter'";
    $sql_show = mysqli_query($koneksi, $query_show);
    $result = mysqli_fetch_assoc($sql_show);
    unlink("foto_dr/" . $result['foto']);


    $query_dhapus = "DELETE FROM tb_dokter
                WHERE id_dokter = '$_POST[id_dokter]'";
    if (mysqli_query($koneksi, $query_dhapus)) {
        echo "<script>
            alert('Hapus Data Sukses');
            document.location='admin_dokter.php';
            </script>";
    } else {
        echo  "<script>
            alert('Hapus Data Gagal');
            document.location='admin_dokter.php';
            </script>";
    }

    if ($query_dhapus) {

        $jumlah = count($_POST['id_hari']);
        for ($i = 0; $i < $jumlah; $i++) {
            $id_hari = $_POST['id_hari'][$i];
            $query_dhapus = "DELETE FROM tb_hari
        WHERE id_hari ='$id_hari';";
            mysqli_query($koneksi, $query_dhapus);
        }
        $jam = count($_POST['id_jam_praktek']);
        for ($x = 0; $x < $jam; $x++) {
            $id_jam_praktek = $_POST['id_jam_praktek'][$x];
            $query_dhapus = "DELETE FROM tb_jam_praktek
        WHERE id_jam_praktek ='$id_jam_praktek';";
            mysqli_query($koneksi, $query_dhapus);
        }
    }
}
