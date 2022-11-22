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
        <link rel="stylesheet" type="text/css" href="./user.css">
    </head>

    <body class="bg-color">
        <!-- Navbar -->
        <div class="navbar">
            <div class="container">
                
                <!-- Navbar logo-->
                <h2 class="nav-logo float-left">HIMAFKUB-ADMIN</h2>

                <!-- Navbar menu-->
                <ul class ="nav-menu float-right">
                    <li><a href="../dashboard.php">Dashboard</a></li>
                    <li><a href="../sop/sop.php">SOP</a></li>
                    <li><a href="../arsip/arsip.php">Arsip</a></li>
                    <li><a href="../artikel/artikel.php">Artikel</a></li>
                    <li><a href="../kementrian/kementrian.php">Kementrian</a></li>
                    <li><a href="#"><?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>)</a>

                        <!-- Sub-menu -->
                        <ul class="dropdown">
                            <li><a href="./user.php">User</a></li>
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
                        Tambah User
                    </div>
                    <div class="box-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" placeholder="Masukan nama anda" class="input-control" required>
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Masukan username anda" class="input-control" required>
                                <label>Level</label>
                                <select name="level" required>
                                    <option value="">- Pilih Kementrian -</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Super Admin">Super Admin</option>
                                </select>
                                <label>Password</label>
                                <input type="text" name="password" placeholder="Masukan password anda" class="input-control" required>
                                <input type="submit" name="submit" value="simpan" class="btn">
                            </div>
                        </form>

                        <?php 

                            if(isset($_POST['submit'])){
                                 
                                $nama  =   $_POST['nama'];
                                $username  =   $_POST['username'];
                                $level  =   $_POST['level'];
                                $password  =   md5($_POST['password']);
                                
                                
                                $simpan = mysqli_query($conn, "INSERT INTO tb_admin VALUES(
                                    null,
                                    '".$nama."',
                                    '".$username."',
                                    '".$password."',
                                    '".$level."',
                                    null,
                                    null
                                )");

                                if($simpan){
                                    echo "Berhasil ditambahkan";
                                }else{
                                    echo "Gagal ditambahkan".mysqli_error($conn);
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

<?php include '../footer.php' ?>