<?php
session_start();
include("conection.php"); 
if ( !isset($_SESSION["login_admin"]) ) {
    header("Location: index.php");
    exit;
}
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Eticket RSU Ganesha</title>
    <style>
        ul li {
            margin-left: 5px;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <!-- #navbar atas -->
    <div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Eticket</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" style="color: white;">
                        <i class="bi bi-person mr-1"></i>
                        <?php echo $_SESSION['username_admin'];?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home_admin.php">
                        <i class="bi bi-house-door mr-1"></i>
                        <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class="bi bi-book mr-2"></i>Dashboard</a>
                        <div class="dropdown-menu bg-dark" style="border: none;">
                            <a class="dropdown-item bg-dark" href="dashboard_admin.php" style="color: white;">
                                <i class="bi bi-pc-display-horizontal mr-2"></i>Dashboard IT</a>
                            <a class="dropdown-item bg-dark" href="dashboard_admin_ipsrs.php" style="color: white;">
                                <i class="bi bi-tools mr-2"></i>Dashboard IPSRS</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class="bi bi-journal-text mr-2"></i>Report</a>
                        <div class="dropdown-menu bg-dark" style="border: none;">
                            <a class="dropdown-item bg-dark" href="report_admin.php" style="color: white;">
                                <i class="bi bi-pc-display-horizontal mr-2"></i>Report IT</a>
                            <a class="dropdown-item bg-dark" href="report_admin_ipsrs.php" style="color: white;">
                                <i class="bi bi-tools mr-2"></i>Report IPSRS</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                        <i class="bi bi-power mr-1"></i>
                        <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- #navbar atas -->

    <!-- #main content -->
        
        <div class="container container-fluid text-center" style="margin-top: 200px;">
            <img class="mt-5 img-fluid" style="width: 600px;" src="picture/ganes.png" alt="" >
        </div>
       
    <!-- #main content -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>