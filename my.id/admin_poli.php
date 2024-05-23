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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">

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

    <!-- menu tambah poli-->
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#ModaltambahpoliToggle">
                    <i class="fa-solid fa-hand-holding-medical fa-lg">&nbsp;</i>
                    Tambah Poliklinik
                </button>
            </div>

        </div>
    </div>
    <!--menu tambah poli-->

    <!--Main Konten -->
    <div class="container-fluid mt-3">
        <div class="card table-responsive">
            <div class="justify-content-center">
                <div class="card-body text-start">
                    <table class="table table-hover mb-3 mt-3" id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col" class="text-start">No</th>
                                <th scope="col">Nama Poli</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>

                        <?php
                        include "koneksi.php";
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_poli ORDER BY namapoli ASC");
                        while ($hasil = mysqli_fetch_array($data)) :
                        ?>
                            <tr>
                                <td class="text-start"><?= $no++ ?></td>
                                <td> <?php echo $hasil['namapoli']; ?></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#UbahModal<?= $hasil['id_poli'] ?>">
                                        <i class="bi bi-pencil-square fa-lg"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#HapusModal<?= $hasil['id_poli'] ?>">
                                        <i class="bi bi-trash3 fa-lg"></i>
                                    </button>
                                </td>
                            </tr>


                            <!--ubah Poli -->
                            <div class="modal fade" id="UbahModal<?= $hasil['id_poli'] ?>" tabindex="-1" aria-labelledby="UbahModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="UbahModalLabel">Edit Poli</h5>
                                            <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="edit.php" method="post">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <input type="hidden" name="id_poli" value="<?= $hasil['id_poli'] ?>">
                                                    <strong for="namapoli" class="form-label">Nama Poli</strong>
                                                    <input type="text" name="namapoli" class="form-control mt-2" id="namapoli" value=" <?php echo $hasil['namapoli']; ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--ubah Poli -->

                            <!--Hapus Poli -->
                            <div class="modal fade" id="HapusModal<?= $hasil['id_poli'] ?>" tabindex="-1" aria-labelledby="HapusModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="HapusModalLabel">Konfirmasi Hapus</h5>
                                            <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="hapus.php" method="POST">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <input type="hidden" name="id_poli" value="<?= $hasil['id_poli'] ?>">
                                                    <h6>Apakah Anda Ingin Menghapus Data Poli Ini ?</h6>
                                                    <br>
                                                    <strong><?php echo $hasil['namapoli']; ?></strong>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Hapus Poli -->


                        <?php

                        endwhile;
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Main Konten -->

    <!--Tambah Poli -->
    <div class="modal fade" id="ModaltambahpoliToggle" aria-hidden="true" aria-labelledby="ModaltambahpoliToggleLabel" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModaltambahpoliToggleLabel">Tambah Data Poli</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="function.php" method="post">
                            <div class="mb-3">
                                <label for="namapoli" class="form-label">Nama Poliklinik</label>
                                <input type="text" name="namapoli" class="form-control" id="namapoli">
                            </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Tambah Poli -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
    <script>
        $('#example').DataTable();
    </script>
</body>

</html>