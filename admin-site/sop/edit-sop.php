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
                                    <?php 
                                    $sop = mysqli_query($conn, "SELECT * FROM tb_kementrian ORDER BY id_kementrian DESC");
                                    if (mysqli_num_rows($sop)) { ?>
                                        <?php while ($row_kat = mysqli_fetch_array($sop)) { ?>
                                            <option value="<?php echo $row_kat["id_kementrian"]; ?>"><?php echo $row_kat["nama_kementrian"]; ?></option>
                                        <?php } ?>
                                    <?php  } ?>
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
                                
                                $update = mysqli_query($conn, "UPDATE tb_sop SET
                                    id_sop = null,
                                    id_kementrian = '".$kementrian."',
                                    judul = '".$judul."',
                                    link_sop = '".$link."'
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