<?php
include "koneksi.php";

$id_poli = $_GET["id_poli"];
$query_sql = mysqli_query($koneksi, "SELECT * FROM tb_dokter
INNER JOIN tb_poli ON tb_dokter.id_poli = tb_poli.id_poli
WHERE tb_dokter.id_poli='$id_poli'");
while ($data = mysqli_fetch_array($query_sql)) {

?>


    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">

        <title>RSU Ganesha</title>
    </head>
    <style>
        body {
            background-color: #f5f5f5;
            background-size: cover;

            font-family: 'Roboto Condensed', sans-serif;
        }
    </style>

    <body>
        <!--Main Konten -->
        <div class="container-sm text-center mt-4 mb-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card" style="background: url(picture/bg3.jpg); background-size:cover;">
                        <div class="table-responsive">
                            <div class="justify-content-center">
                                <h3 class="fw-bolder text-center fs-4 mb-4 mt-3"><?php echo $data['namapoli']; ?> </h3>
                                <img class="img-thumbnail" src="foto_dr/<?php echo $data['foto']; ?>" style="width: 250px; height: 250px; border-radius:10%;">
                                <div class="col-md m-2 mt-3 mb-4 fs-6 fw-bolder text-center">
                                    <p class="card-tittle"><?php echo $data['nama_dokter']; ?></p>
                                </div>
                            </div>
                            <div class="container d-flex flex-nowrap justify-content-center mb-3">
                                <!--Hari-->
                                <div class="row">
                                    <div class="col">
                                        <?php
                                        $query_hari = mysqli_query($koneksi, "SELECT * FROM tb_dokter
                                                inner JOIN tb_hari ON tb_dokter.id_dokter = tb_hari.id_dokter
                                                WHERE tb_dokter.id_dokter='$data[id_dokter]'
                                                ");
                                        while ($hasil = mysqli_fetch_array($query_hari)) {
                                        ?>
                                            <div class="p-1 text-start">
                                                <small><?php echo  $hasil['hari']; ?></small>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- Hari-->
                                <div class="row col-1"></div>
                                <!-- Jam-->
                                <div class="row">
                                    <div class="col">
                                        <?php
                                        $query_jam = mysqli_query($koneksi, "SELECT * FROM tb_dokter 
                            JOIN tb_jam_praktek on tb_dokter.id_dokter = tb_jam_praktek.id_dokter 
                            WHERE tb_dokter.id_dokter='$data[id_dokter]' ") or die(mysqli_error($koneksi));
                                        while ($hasil = mysqli_fetch_array($query_jam)) { ?>

                                            <div class="p-1 text-start">
                                                <small><?php echo  $hasil['jam_praktek']; ?></small>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- Jam-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Main Konten -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>



    </body>

    </html>
<?php
}
?>