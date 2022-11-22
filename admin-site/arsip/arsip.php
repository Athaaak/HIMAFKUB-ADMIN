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
        <link rel="stylesheet" type="text/css" href="./arsip.css">
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
                    <li><a href="./arsip.php">Arsip</a></li>
                    <li><a href="../artikel/artikel.php">Artikel</a></li>
                    <li><a href="../kementrian/kementrian.php">Kementrian</a></li>
                    <li><a href="#"><?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>)</a>

                        <!-- Sub-menu -->
                        <ul class="dropdown">
                            <li><a href="./user/user.php">User</a></li>
                            <li><a href="../logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>
        </div>

    <head>
        <title>Admin Site HIMAFKUB</title>
        <link rel="stylesheet" type="text/css" href="./arsip.css">
    </head>

     <!-- Content -->
        <div class="content">
            <div class="container">
                <div class="box">
                    <div class="box-header">
                        Upload Arsip
                    </div>
                    <div class="box-body">

                        <a href="tambah-arsip.php">Tambah</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tahun</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    $arsip = mysqli_query($conn, "SELECT * FROM tb_arsip, tb_tahun WHERE tb_arsip.id_tahun = tb_tahun.id ORDER BY id_arsip DESC");
                                    if(mysqli_num_rows($arsip) > 0 ){
                                        while($p = mysqli_fetch_array($arsip)){

                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p['judul']?></td>
                                        <td><?= $p['tahun']?></td>
                                        <td><?= $p['link']?></td>
                                        <td>
                                            <a href="edit-arsip.php?idarsip=<?= $p['id_arsip']?>">Edit</a> |
                                            <a href="hapus.php?idarsip=<?= $p['id_arsip']?>">Delete</a>
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