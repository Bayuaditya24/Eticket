<?php
/* --- edit Dokter ----*/
include("koneksi.php");
if (isset($_POST["ubah"])) {
    $id_dokter = $_POST["id_dokter"];
    $nama_dokter = $_POST["nama_dokter"];
    $id_poli = $_POST["id_poli"];

    $query_show = "SELECT * FROM tb_dokter WHERE id_dokter='$id_dokter'";
    $sql_show = mysqli_query($koneksi, $query_show);
    $result = mysqli_fetch_assoc($sql_show);

    if ($_FILES['foto']['name'] == "") {
        $foto = $result['foto'];
    } else {
        $foto = $_FILES['foto']['name'];
        unlink("foto_dr/" . $result['foto']);
        move_uploaded_file($_FILES['foto']['tmp_name'], 'foto_dr/' . $_FILES['foto']['name']);
    };

    $edit = "UPDATE tb_dokter SET nama_dokter = '$nama_dokter', id_poli = '$id_poli', foto ='$foto'
    WHERE id_dokter='$id_dokter';";


    if (mysqli_query($koneksi, $edit)) {
        echo "<script>
        alert('Edit Data Sukses');
        document.location='admin_dokter.php';
        </script>";
    } else {
        echo  "<script>
        alert('Edit Data Gagal');
        document.location='admin_dokter.php';
        </script>";
    }

    if ($edit) {
        $id_hari = $_POST['id_hari'];
        $jumlah = count($_POST['hari']);
        for ($i = 0; $i < $jumlah; $i++) {
            $id_hari = $_POST['id_hari'][$i];
            $hari = $_POST['hari'][$i];
            $edit = "UPDATE tb_hari SET hari = '$hari' WHERE id_hari ='$id_hari';";
            mysqli_query($koneksi, $edit);
        }

        $id_jam_praktek = $_POST['id_jam_praktek'];
        $jam = count($_POST['jam_praktek']);
        for ($i = 0; $i < $jam; $i++) {
            $id_jam_praktek = $_POST['id_jam_praktek'][$i];
            $jam_praktek = $_POST['jam_praktek'][$i];
            $edit = "UPDATE tb_jam_praktek SET jam_praktek = '$jam_praktek' WHERE id_jam_praktek ='$id_jam_praktek';";
            mysqli_query($koneksi, $edit);
        }
    }
}

/* --- edit Dokter ----*/
