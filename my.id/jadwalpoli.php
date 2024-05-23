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

<body class="bg-body-tertiary">
    <!--Main Konten -->
    <div class="container mt-3">
        <div class="card">
            <div class="d-flex justify-content-center">
                <div class="card-body ">
                    <div class="logo mt-2 mb-3 text-center">
                        <img src="picture/rsuganesha.png" style="width: 160px; height:150px; border-radius:50%;" alt="">
                    </div>
                    <h6 class="text-secondary text-center mt-3 mb-5">Jadwal Praktek Dokter</h6>
                             <div class="row text-center mb-4">
                        <div class="col-md">
                            <?php
                            include "koneksi.php";

                            $data = mysqli_query($koneksi, "SELECT * FROM tb_poli ORDER BY namapoli ASC");
                            while ($hasil = mysqli_fetch_array($data)) {
                            ?>
                                <a href="dokter.php?id_poli=<?= $hasil['id_poli'] ?>" type="hidden" class="col-md p-2 m-2 btn btn-secondary mb-4" style="width: 250px;">
                                    <?php echo $hasil['namapoli']; ?>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Main Konten -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>



</body>

</html>