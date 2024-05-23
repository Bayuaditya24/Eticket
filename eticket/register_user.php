<?php
include "conection.php"
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Eticket RSU Ganesha</title>
    <style>
        body {
            background-color: #f5f5f5;
            background-size: cover;
           
        }
    </style>
</head>

<body>
    <!-- #main content -->
    <div class="container container-fluid mt-15">
        <div class="card login-form" style="border: none;">
        <div class="card-body">
            <form class="text-center" action="user_register.php" method="post">
                    <h5>REGISTER</h4>
                    <br>
                    <div class="form-group">
                            <div class="mb-3">
                                <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" class="form-control" required style="text-transform: capitalize;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <input type="text" placeholder="EMAIL" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <input type="text" placeholder="Unit" name="unit" class="form-control" required style="text-transform: uppercase;">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <input type="text" placeholder="USERNAME" name="username" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <input type="text" placeholder="PASSWORD" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="index.php"></a>
                        <button type="submit" name="register" class="btn btn-success col-5">REGISTER</button>
                        </div> 
            </form>
        </div>
        </div>
    </div>
    <!-- #main content -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>