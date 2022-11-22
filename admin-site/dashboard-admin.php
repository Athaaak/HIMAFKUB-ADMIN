<?= 
    session_start(); 
    if(!isset($_SESSION['status_login'])){
        echo "<script>window.location = '../login.php'</script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Site HIMAFKUB</title>
        <link rel="stylesheet" type="text/css" href="./admin-site.css">
    </head>

    <body class="bg-color">
        <!-- Navbar -->
        <div class="navbar">
            <div class="container">
                
                <!-- Navbar logo-->
                <h2 class="nav-logo float-left">BEMFKUB-ADMIN</h2>

                <!-- Navbar menu-->
                <ul class ="nav-menu float-right">
                    <li><a href="./dashboard/main.php">Main Website</a></li>
                    <li><a href="./sop/sop.php">SOP</a></li>
                    <li><a href="./arsip/arsip.php">Arsip</a></li>
                    <li><a href="./artikel/artikel.php">Artikel</a></li>
                    <li><a href="./kementrian/kementrian.php">Kementrian</a></li>
                    <li><a href="#"><?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>)</a>

                        <!-- Sub-menu -->
                        <ul class="dropdown">
                            <li><a href="./user/user.php">User</a></li>
                            <li><a href="./logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>
        </div>

     <!-- Content -->
        <div class="content">
            <div class="container">
                <div class="box">
                    <div class="box-header">
                        Dashboard
                    </div>
                    <div class="box-body">
                        Selamat datang <?= $_SESSION['uname'] ?>
                    </div>
                </div>
            </div>
        </div>

<?php include 'footer.php' ?>