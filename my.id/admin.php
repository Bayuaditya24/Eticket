<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

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
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand badge bg-secondary fs-6 font-monospace" href="#">Admin</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-6 gap-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="admin.php">
                            <i class="bi bi-house fa-lg"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_poli.php">
                            <i class="bi bi-hospital fa-lg"></i>&nbsp; Poliklinik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_dokter.php">
                            <i class="fa-solid fa-stethoscope fa-lg"></i>&nbsp;Dokter Spesialis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar-->

    <!--Main Konten -->
    <div class="container-sm mt-5">
        <div class="card table-responsive">
            <div class="justify-content-center">
                <div class="card-body text-center">
                    <div class="img">
                        <img src="picture/ganes.png" alt="" style="width:500px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main Konten -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</body>

</html>