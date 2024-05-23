<?php
include("koneksi.php");
$id_dokter = $_POST['id_dokter'];


$data = mysqli_query($koneksi, "SELECT * FROM tb_dokter 
JOIN tb_poli ON tb_dokter.id_poli = tb_poli.id_poli  
WHERE tb_dokter.id_poli = tb_poli.id_poli
And id_dokter=$id_dokter");
while ($hasil = mysqli_fetch_array($data)) {
?>
    <div class="form-group text-center">
        <div class="mb-3">
            <input type="hidden" name="id_dokter" value="<?= $hasil['id_dokter'] ?>">
            <strong><?= $hasil['namapoli'] ?></strong>
        </div>
        <div class=" row mb-3 mt-3 justify-content-center">
            <label for="formFile" class="form-label"></label>
            <img class="img-thumbnail form-control" src="foto_dr/<?php echo $hasil['foto']; ?>" style="width: 270px; height: 250px; border-radius:10%;">
        </div>
        <div class="mb-3">
            <strong><?= $hasil['nama_dokter'] ?></strong>
        </div>
        <div class="d-flex flex-nowrap justify-content-center mb-3">
            <!--Hari-->
            <div class="row ">
                <div class="col">
                    <?php
                    $query_hari = mysqli_query($koneksi, "SELECT * FROM tb_dokter
                                                inner JOIN tb_hari ON tb_dokter.id_dokter = tb_hari.id_dokter
                                                WHERE tb_dokter.id_dokter='$hasil[id_dokter]'
                                                ");
                    while ($tampil = mysqli_fetch_array($query_hari)) {
                    ?>
                        <div class="p-1 text-start">
                            <div><?php echo  $tampil['hari']; ?></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- Hari-->
            <div class="col-2"></div>
            <!-- Jam-->
            <div class="row">
                <div class="col">
                    <?php
                    $query_jam = mysqli_query($koneksi, "SELECT * FROM tb_dokter 
                            JOIN tb_jam_praktek on tb_dokter.id_dokter = tb_jam_praktek.id_dokter 
                            WHERE tb_dokter.id_dokter='$hasil[id_dokter]' ") or die(mysqli_error($koneksi));
                    while ($tampil = mysqli_fetch_array($query_jam)) { ?>

                        <div class="p-1 text-start">
                            <div><?php echo  $tampil['jam_praktek']; ?></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- Jam-->



        <?php
    }
        ?>