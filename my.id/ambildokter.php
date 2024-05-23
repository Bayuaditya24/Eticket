<?php
include("koneksi.php");

$dokter = $_GET['dokter'];

$query_input = mysqli_query($koneksi, "SELECT * FROM tb_dokter WHERE id_dokter='$dokter'");

while ($input = mysqli_fetch_array($query_input)) {

    echo "  <div class='row mb-3'>
    <div class='row mb-3'>
        <div class='col-md-6'>
            <div class='form-group'>
                <label for='hari'>Hari</label>
                <input type='hidden' value='$input[id_dokter]' name='id_dokter[]'>
                <input type='text' name='hari[]'' class='form-control col-8'>
            </div>
        </div>
        <div class='col-md-6'>
            <div class='form-group'>
                <label for='jam_praktek'>Jam Praktek</label>
                <input type='hidden' value='$input[id_dokter]' name='id_dokter[]'>
                <input type='text' name='jam_praktek[]' class='form-control col-3'>
            </div>
        </div>
    </div>
</div>";
}
