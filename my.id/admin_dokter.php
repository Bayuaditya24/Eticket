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

    <!-- menu tambah dokter-->
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#tambahdModal">
                    <i class="bi bi-calendar2-plus fa-lg">&nbsp;</i>
                    Tambah Jadwal Dokter
                </button>
                &nbsp;
                <button class="btn btn-success m-1" type="button" data-bs-toggle="modal" data-bs-target="#ModaltambahdokterToggle">
                    <i class="fa-solid fa-user-doctor fa-lg">&nbsp;</i>
                    Tambah Dokter Spesialis
                </button>
            </div>

        </div>
    </div>
    <!--menu tambah dokter-->

    <!--Main Konten -->
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="table-responsive">
                <div class="card-body">
                    <table class="table table-hover mt-3 mb-3" id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col" class="text-start">No</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Poliklinik</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php
                        include "koneksi.php";
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_dokter 
                        JOIN tb_poli ON tb_dokter.id_poli = tb_poli.id_poli  
                        WHERE tb_dokter.id_poli = tb_poli.id_poli");
                        while ($hasil = mysqli_fetch_array($data)) :
                        ?>

                            <tr>
                                <td class="text-start"><?= $no ?></td>
                                <td><?php echo $hasil['nama_dokter']; ?></td>
                                <td> <?php echo $hasil['namapoli']; ?></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#DetaildModal" onclick="detaildokter('<?= $hasil['id_dokter'] ?>')">
                                        <i class="bi bi-person-vcard fa-lg"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary m-1 edit_data" data-bs-toggle="modal" data-bs-target="#UbahdModal" onclick="dataid('<?= $hasil['id_dokter']; ?>')">
                                        <i class="bi bi-pencil-square fa-lg"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#HapusdModal<?= $hasil['id_dokter'] ?>">
                                        <i class="bi bi-trash3 fa-lg"></i>
                                    </button>
                                </td>
                            </tr>



                            <!--detail Dokter -->
                            <div class="modal fade" id="DetaildModal" tabindex="-1" aria-labelledby="DetaildModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="UbahModalLabel">Detail Dokter</h5>
                                            <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <div id="detail_dokter"></div>

                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--detail Dokter -->

                            <!--edit Dokter -->
                            <div class="modal fade" id="UbahdModal" aria-hidden="true" aria-labelledby="UbahdModalLabel" tabindex="-1">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="UbahdModalLabel">Edit Data Dokter</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <form action="edit_dokter.php">
                                                    <div id="data_dokter">

                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--edit Dokter -->
                            <!--Hapus Dokter -->
                            <div class="modal fade" id="HapusdModal<?= $hasil['id_dokter'] ?>" tabindex="-1" aria-labelledby="HapusdModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="HapusdModalLabel">Konfirmasi Hapus</h5>
                                            <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="hapus.php" method="POST">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <input type="hidden" name="id_dokter" value="<?= $hasil['id_dokter'] ?>">
                                                    <h6>Apakah Anda Ingin Menghapus Data Dokter Ini ?</h6>
                                                    <br>
                                                    <strong><?php echo $hasil['nama_dokter']; ?></strong>
                                                    <?php
                                                    $query_hari = mysqli_query($koneksi, "SELECT * FROM tb_dokter
                                                            inner JOIN tb_hari ON tb_dokter.id_dokter = tb_hari.id_dokter
                                                            WHERE tb_dokter.id_dokter='$hasil[id_dokter]'
                                                            ");
                                                    while ($view = mysqli_fetch_array($query_hari)) {
                                                    ?>
                                                        <input type="hidden" value="<?= $view['id_hari'] ?>" name="id_hari[]">
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    $query_jam = mysqli_query($koneksi, "SELECT * FROM tb_dokter 
                                                            JOIN tb_jam_praktek on tb_dokter.id_dokter = tb_jam_praktek.id_dokter 
                                                            WHERE tb_dokter.id_dokter='$hasil[id_dokter]' ");
                                                    while ($tampil = mysqli_fetch_array($query_jam)) {
                                                    ?>
                                                        <input type="hidden" value="<?= $tampil['id_jam_praktek'] ?>" name="id_jam_praktek[]">
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" name="hapusd" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Hapus Dokter-->



                        <?php
                            $no++;
                        endwhile;
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Main Konten -->

    <!--tambah hari dan jam Dokter -->
    <div class="modal fade" id="tambahdModal" aria-hidden="true" aria-labelledby="tambahdModalLabel" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahdModalLabel">Tambah Hari dan Jam Praktek</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="post" action="tambahharijam.php">
                            <div class="mb-3">
                                <label for="poli" class="form-label">Nama Poli</label>
                                <select name="id_poli" id="id_poli" class="form-select" aria-label="Default select example">
                                    <option>Pilih Poli</option>
                                    <?php
                                    include "koneksi.php";
                                    $query_poli = mysqli_query($koneksi, "SELECT * FROM tb_poli ") or die(mysqli_error($koneksi));
                                    while ($id_poli = mysqli_fetch_array($query_poli)) {
                                        echo "<option value=$id_poli[id_poli]> $id_poli[namapoli] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="dokter" class="form-label">Nama Dokter</label>
                                <select name="dokter" id="dokter" class="form-select mb-3 gap-2" aria-label="Default select example">
                                    <option class="gap-2">Pilih Nama Dokter</option>

                                </select>
                            </div>
                            <div class="form-group" name="tambahharijam" id="tambahharijam">

                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="nambah" class="btn btn-success" data-bs-dismiss="modal">Save</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--tambah hari dan jam Dokter -->

    <!--Tambah Dokter -->
    <div class="modal fade" id="ModaltambahdokterToggle" aria-hidden="true" aria-labelledby="ModaltambahdokterToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModaltambahdokterToggleLabel">Tambah Data Dokter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="function.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="id_poli" class="form-label">Nama Poli</label>
                                <select name="id_poli" class="form-select" aria-label="Default select example">
                                    <option>Pilih Poli</option>
                                    <?php
                                    include "koneksi.php";
                                    $query_sql = mysqli_query($koneksi, "SELECT * FROM tb_poli") or die(mysqli_error($koneksi));
                                    while ($data = mysqli_fetch_array($query_sql)) {
                                        echo "<option value=$data[id_poli]> $data[namapoli] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nama_dokter" class="form-label">Nama Dokter</label>
                                <input type="text" name="nama_dokter" class="form-control" id="nama_dokter">
                            </div>
                            <div class="form-group" id="input">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hari">Hari</label>
                                            <input type="text" name="hari[]" class="form-control col-8">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jam_praktek">Jam Praktek</label>
                                            <input type="text" name="jam_praktek[]" class="form-control col-3">
                                        </div>
                                    </div>
                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-success" name="new" id="new">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="formFile" class="form-label">Tambah Foto</label>
                                <input class="form-control" type="file" name="foto" id="formFile">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="save" name="save" value="save" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Tambah Dokter -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
    <script>
        $('#example').DataTable({
            responsive: true
        });
    </script>
    <script type="text/javascript">
        function dataid(a) {
            $.ajax({
                type: 'post',
                url: 'modal_edit_dokter.php',
                data: {
                    id_dokter: a
                },
                success: function(response) {
                    $('#data_dokter').html(response);
                }
            });
        }
    </script>

    <script type="text/javascript">
        function detaildokter(b) {
            $.ajax({
                type: 'post',
                url: 'modal_detail_dokter.php',
                data: {
                    id_dokter: b
                },
                success: function(response) {
                    $('#detail_dokter').html(response);
                }
            });
        }
    </script>

    <script type="text/javascript">
        var htmlobjek;
        $(document).ready(function() {
            $("#id_poli").change(function() {
                var id_poli = $("#id_poli").val();
                $.ajax({
                    url: "ambilpoli.php",
                    data: "id_poli=" + id_poli,
                    chace: false,
                    success: function(response) {
                        $("#dokter").html(response);
                    }
                });
            });

            $("#dokter").change(function() {
                var dokter = $("#dokter").val();
                $.ajax({
                    url: "ambildokter.php",
                    data: "dokter=" + dokter,
                    chace: false,
                    success: function(response) {
                        $("#tambahharijam").html(response);
                    }
                });
            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            var i = 0;
            $('#new').click(function() {
                ++i;
                $('#input').append(`<div class="form-group mb-3" id="form">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal">Hari</label>
                                            <input type="text" name="hari[]" class="form-control col-8">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jam_praktek">Jam Praktek</label>
                                            <input type="text" name="jam_praktek[]" class="form-control col-3">
                                        </div>
                                    </div>
                                    <div class="col-md-2 mt-4">
                                        <div class="form-group">
                                        <button class="btn btn-danger btn_delete" type="button"  name="delete" id="">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>`);

            });

            $(document).on('click', '.btn_delete', function() {
                var button_id = $(this).attr("id");
                $("#form" + button_id + "").remove();
            });




        });
    </script>




</body>

</html>