<?= 
    session_start(); 
    include '../../koneksi.php';
    if(!isset($_SESSION['status_login'])){
        echo "<script>window.location = '../../login.php'</script>";
    }
?>

<?php 
    $sop = mysqli_query($conn, "SELECT * FROM tb_arsip WHERE id_arsip = '".$_GET['idarsip']."' ");
    $p = mysqli_fetch_object($sop);
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
                    <li><a href="../dashboard.php">Dashboard</a></li>
                    <li><a href="../sop/sop.php">SOP</a></li>
                    <li><a href="../arsip/arsip.php">Arsip</a></li>
                    <li><a href="../artikel/artikel.php">Artikel</a></li>
                    <li><a href="../kementrian/kementrian.php">Kementrian</a></li>
                    <li><a href="#"><?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>)</a>

                        <!-- Sub-menu -->
                        <ul class="dropdown">
                            <li><a href="user.php">User</a></li>
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
                        Edit Arsip
                    </div>
                    <div class="box-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" placeholder="Masukan Judul Arsip Anda" class="input-control" value="<?= $p->judul ?>">
                                <label>Tahun</label>
                                <select name="tahun" required>
                                    <option value="">- Pilih Tahun -</option>
                                    <?php 
                                    $arsip = mysqli_query($conn, "SELECT * FROM tb_tahun ORDER BY id ASC");
                                    if (mysqli_num_rows($arsip)) { ?>
                                        <?php while ($row_kat = mysqli_fetch_array($arsip)) { ?>
                                            <option value="<?php echo $row_kat["id"]; ?>"><?php echo $row_kat["tahun"]; ?></option>
                                        <?php } ?>
                                    <?php  } ?>
                                </select>
                                <label>Link</label>
                                <input type="text" name="link" placeholder="Masukan Link" class="input-control" required>
                                <input type="submit" name="submit" value="simpan" class="btn">
                            </div>
                        </form>

                        <?php 
                            if(isset($_POST['submit'])){
                                 
                                $tahun  =   $_POST['tahun'];
                                $judul  =   $_POST['judul'];
                                $link  =   $_POST['link'];
                                
                                $update = mysqli_query($conn, "UPDATE tb_arsip SET
                                    id_arsip = null,
                                    id_tahun = '".$tahun."',
                                    judul = '".$judul."',
                                    link = '".$link."'
                                ");

                                if($update){
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