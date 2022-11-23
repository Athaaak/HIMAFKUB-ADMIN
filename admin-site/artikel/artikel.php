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
        <link rel="stylesheet" type="text/css" href="./artikel.css">
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
                    <li><a href="./artikel.php">Artikel</a></li>
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
        <link rel="stylesheet" type="text/css" href="./artikel.css">
    </head>

     <!-- Content -->
        <div class="content">
            <div class="container">
                <div class="box">
                    <div class="box-header">
                        Upload Artikel
                    </div>
                    <div class="box-body">

                        <a href="tambah-artikel.php">Tambah</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Isi Berita</th>
                                    <th>Posted at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    $artikel = mysqli_query($conn, "SELECT * FROM tb_artikel, tb_kementrian WHERE tb_artikel.id_kategori = tb_kementrian.id_kementrian ORDER BY id DESC");
                                    if(mysqli_num_rows($artikel) > 0 ){
                                        while($p = mysqli_fetch_array($artikel)){

                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p['judul']?></td>
                                        <td><?= $p['nama_kementrian']?></td>
                                        <td><img src="./img/<?= $p['gambar_berita']?>" width="200"></td>
                                        <td><?= $p['isi_berita']?></td>
                                        <td><?= $p['created_at']?></td>
                                        <td>
                                            <a href="edit-artikel.php?idartikel=<?= $p['id']?>">Edit</a> |
                                            <a href="hapus.php?idartikel=<?= $p['id']?>">Delete</a>
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