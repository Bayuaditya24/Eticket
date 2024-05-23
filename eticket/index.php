<?php
session_start();
include 'conection.php';

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

            height: 100vh;
            background-size: cover;
            background-image: url(picture/RS-Ganesha.jpg);
            z-index: -1;
        }
    </style>
</head>

<body>
    <!-- #main content -->
    <div class="container container-fluid" style="width: 320px;">
    <div class="card login-form" style="border: none;">
        <div class="card-body mt-3">
            <form action="user_login.php" method="post">
                <div class="text-center">
                    <img class="mb-3 mt-2" style="width: 150px; height: 150px;" src="picture/rsuganesha.png" alt="...">
                    <h4>E-Ticket RSU Ganesha</h4>
                        <div class="form-group">
                            <div class="mb-3 mt-4">
                                <input type="text" placeholder="Username" name="username" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <input type="password" placeholder="Password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                        <a href="home_user.php"></a>
                        <button type="submit" name="login" value="login" class="btn btn-success form-control mt-2 ">Login</button>
                        </div>
                        <div class="bottom" style="font-size: 15px;">
                            <p>Belum Punya Akun ?
                                <a href="register_user.php">Register disini</a>
                            </p>
                        </div>
                        <div class="bottom" style="font-size: 15px;">
                                <a href="login_admin.php">Admin</a>
                        </div>


                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan']== "gagal") {
                                echo "<p style='color:red; font-size: 16px;'>Username dan Password Tidak Sesuai !</p>
                                <p><a href='index.php'>Refresh Page</a></p>";
                            }
                        }
        
                        ?>
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