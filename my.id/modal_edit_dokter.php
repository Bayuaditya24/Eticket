<?php
include("koneksi.php");
$id_dokter = $_POST['id_dokter'];


$data = mysqli_query($koneksi, "SELECT * FROM tb_dokter 
JOIN tb_poli ON tb_dokter.id_poli = tb_poli.id_poli  
WHERE tb_dokter.id_poli = tb_poli.id_poli
And id_dokter=$id_dokter");
while ($hasil = mysqli_fetch_array($data)) {
?>

    <form action="edit_dokter.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <input type="hidden" value="<?= $hasil['id_dokter'] ?>" name="id_dokter">
            <strong for="id_poli" class="form-label">Nama Poli</strong>
            <select name="id_poli" class="form-select mt-2" aria-label="Default select example">
                <option selected value="<?= $hasil['id_poli'] ?>"><?= $hasil['namapoli'] ?></option>
                <?php
                $query_sql = mysqli_query($koneksi, "SELECT * FROM tb_poli") or die(mysqli_error($koneksi));
                while ($view = mysqli_fetch_array($query_sql)) {
                    echo "<option value=$view[id_poli]> $view[namapoli] </option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_dokter" class="form-label"><strong>Nama Dokter</strong></label>
            <input type="text" name="nama_dokter" class="form-control" id="nama_dokter" value="<?= $hasil['nama_dokter'] ?>">
        </div>
        <div class="form-group mb-3" id="form">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="mb-2" for="hari"><strong>Hari</strong></label>
                    <?php
                    $query_hari = mysqli_query($koneksi, "SELECT * FROM tb_dokter
inner JOIN tb_hari ON tb_dokter.id_dokter = tb_hari.id_dokter
WHERE tb_dokter.id_dokter='$hasil[id_dokter]'
");
                    while ($view = mysqli_fetch_array($query_hari)) {
                    ?>
                        <div class="form-group">
                            <input type="hidden" value="<?= $view['id_hari'] ?>" name="id_hari[]">
                            <input type="text" name="hari[]" value="<?= $view['hari'] ?>" class="form-control col-8 mb-3">
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-4">
                    <label class="mb-2" for="jam_praktek"><strong>Jam Praktek</strong></label>
                    <?php
                    $query_jam = mysqli_query($koneksi, "SELECT * FROM tb_dokter 
                            JOIN tb_jam_praktek on tb_dokter.id_dokter = tb_jam_praktek.id_dokter 
                            WHERE tb_dokter.id_dokter='$hasil[id_dokter]' ") or die(mysqli_error($koneksi));
                    while ($tampil = mysqli_fetch_array($query_jam)) {
                    ?>
                        <div class="d-flex gap-3 form-group">
                            <input type="hidden" value="<?= $tampil['id_jam_praktek'] ?>" name="id_jam_praktek[]">
                            <input type="text" name="jam_praktek[]" value="<?= $tampil['jam_praktek'] ?>" class="form-control col-3 mb-3">
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row mb-3 mt-3">
            <label for="formFile" class="form-label"><strong>Foto Dokter</strong></label>
            <img class="img-thumbnail mb-3" src="foto_dr/<?php echo $hasil['foto']; ?>" style="width: 250px; height: 250px; border-radius:10%;">
            <input class="form-control" type="file" name="foto" id="foto" value="foto_dr/<?php echo $hasil['foto']; ?>">
            <input type="hidden" name="foto" value="foto_dr/<?php echo $hasil['foto']; ?>">
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="ubah" class="btn btn-primary">Save changes</button>
        </div>
    </form>
<?php
}
?>