<?= 
    session_start(); 
    include '../../koneksi.php';
    if(!isset($_SESSION['status_login'])){
        echo "<script>window.location = '../../login.php'</script>";
    }
?>

<?php 
    $sop = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_sop = '".$_GET['idsop']."' ");
    $p = mysqli_fetch_object($sop);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Site HIMAFKUB</title>
        <link rel="stylesheet" type="text/css" href="./sop.css">
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
                        Edit SOP
                    </div>
                    <div class="box-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" placeholder="Masukan Judul SOP Anda" class="input-control" value="<?= $p->judul ?>">
                                <label>Kementrian</label>
                                <select name="kementrian" required>
                                    <option value="">- Pilih Kementrian -</option>
                                    <option value="Pandora">Pandora</option>
                                    <option value="PSDM">PSDM</option>
                                    <option value="Dagri">Dagri</option>
                                    <option value="Biro Litbang">Biro Litbang</option>
                                    <option value="Satuan Pengawas Internal">Satuan Pengawas Internal</option>
                                    <option value="Medsi">Medsi</option>
                                    <option value="Lugri">Lugri</option>
                                    <option value="Seniora">Seniora</option>
                                    <option value="Karinov">Karinov</option>
                                    <option value="Sosma">Sosma</option>
                                    <option value="LH">LH</option>
                                    <option value="Akspro">Akspro</option>
                                    <option value="Biro Admin">Biro Admin</option>
                                </select>
                                <label>Link</label>
                                <input type="text" name="link_sop" placeholder="Masukan Link" class="input-control" required>
                                <input type="submit" name="submit" value="simpan" class="btn">
                            </div>
                        </form>

                        <?php 
                            if(isset($_POST['submit'])){
                                 
                                $judul  =   $_POST['judul'];
                                $kementrian  =   $_POST['kementrian'];
                                $link  =   $_POST['link_sop'];
                                
                                $simpan = mysqli_query($conn, "INSERT INTO tb_sop VALUES(
                                    null,
                                    '".$kementrian."',
                                    '".$judul."',
                                    '".$link."'
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