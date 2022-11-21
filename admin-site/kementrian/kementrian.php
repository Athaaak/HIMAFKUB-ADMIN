<?= 
    session_start(); 
    include '../../koneksi.php';
    if(!isset($_SESSION['status_login'])){
        echo "<script>window.location = '../../login.php'</script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Site HIMAFKUB</title>
        <link rel="stylesheet" type="text/css" href="./kementrian.css">
    </head>

    <body class="bg-color">
        <!-- Navbar -->
        <div class="navbar">
            <div class="container">
                
                <!-- Navbar logo-->
                <h2 class="nav-logo float-left">HIMAFKUB-ADMIN</h2>

                <!-- Navbar menu-->
                <ul class ="nav-menu float-right">
                    <li><a href="../dashboard-admin.php">Dashboard</a></li>
                    <li><a href="../sop/sop.php">SOP</a></li>
                    <li><a href="../arsip/arsip.php">Arsip</a></li>
                    <li><a href="../artikel/artikel.php">Artikel</a></li>
                    <li><a href="">Kementrian</a></li>
                    <li><a href="#"><?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>)</a>

                        <!-- Sub-menu -->
                        <ul class="dropdown">
                            <li><a href="#">Ubah Password</a></li>
                            <li><a href="../logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>
        </div>

    <head>
        <title>Admin Site HIMAFKUB</title>
        <link rel="stylesheet" type="text/css" href="./sop.css">
    </head>

     <!-- Content -->
        <div class="content">
            <div class="container">
                <div class="box">
                    <div class="box-header">
                        Kementrian
                    </div>
                    <div class="box-body">

                        <a href="tambah-sop.php">Tambah</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kementrian</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    $sop = mysqli_query($conn, "SELECT * FROM tb_kementrian ORDER BY id_kementrian DESC");
                                    if(mysqli_num_rows($sop) > 0 ){
                                        while($p = mysqli_fetch_array($sop)){

                                            ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $p['nama_kementrian']?></td>
                                                <td>
                                                    <a href="">Edit</a> |
                                                    <a href="">Delete</a>
                                                </td>
                                            </tr>
                                            <?php }} 
                                    else { ?>  
                                    
                                    <tr>
                                        <td colspan="5">Data is missing</td>
                                    </tr>
                                    
                                    <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<?php include '../footer.php' ?>