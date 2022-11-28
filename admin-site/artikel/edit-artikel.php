<?= 
    session_start(); 
    include '../../koneksi.php';
    if(!isset($_SESSION['status_login'])){
        echo "<script>window.location = '../../login.php'</script>";
    }
?>

<?php 
    $a = mysqli_query($conn, "SELECT * FROM tb_artikel WHERE id = '".$_GET['idartikel']."' ");
    $p = mysqli_fetch_object($a);
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
        <link rel="stylesheet" type="text/css" href="./artikel.css">
    </head>

     <!-- Content -->
        <div class="content">
            <div class="container">
                <div class="box">
                    <div class="box-header">
                        Edit Artikel
                    </div>
                    <div class="box-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" placeholder="Masukan Judul Artikel" class="input-control" value="<?= $p->judul ?>" required>
                                <label>Kategori</label>
                                <select name="kategori" required>
                                    <option value="">- Pilih Kategori -</option>
                                    <?php 
                                    $no = 1;
                                    $artikel = mysqli_query($conn, "SELECT * FROM tb_kementrian ORDER BY id_kementrian ASC");
                                    if (mysqli_num_rows($artikel)) { ?>
                                        <?php while ($row_kat = mysqli_fetch_array($artikel)) { ?>
                                            <option value="<?php echo $row_kat["id_kementrian"]; ?>"><?php echo $row_kat["nama_kementrian"]; ?></option>
                                        <?php } ?>
                                    <?php  } ?>
                                </select>
                                <label>Gambar</label>
                                <img src="./img/<?= $p->gambar_berita?>" width="200" class="pic">
                                <input type="hidden" name="gambar2" value="<?= $p->gambar_berita ?>">
                                <input type="file" name="gambar" class="input-control">
                                <label>Isi Berita</label>
                                <textarea rows="10" cols="150" type="text" name="isi_berita" placeholder="Masukan isi berita (Resize untuk memperbesar)" class="input-control"><?= $p->isi_berita ?></textarea>
                                <input type="submit" name="submit" value="simpan" class="btn">
                            </div>
                        </form>

                        <?php 
                            if(isset($_POST['submit'])){

                                $filename = $_FILES['gambar']['name'];
                                
                                if($_FILES['gambar']['name'] != ''){
                                    $filename = $_FILES['gambar']['name'];
                                    $tmpname = $_FILES['gambar']['tmp_name'];
                                    $filesize = $_FILES['gambar']['size'];

                                    $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                                    $rename = time().'.'.$formatfile;

                                    $allowedtype =  array('png','jpg','jpeg');

                                    if(file_exists("./img/".$_POST['gambar2'])){  

                                        unlink("./img/".$_POST['gambar2']);
                                        
                                    }

                                    move_uploaded_file($tmpname, "./img/".$rename);
                                }
                                else{
                                    $rename = $_POST['gambar2'];
                                }

                                    $judul  =   $_POST['judul'];
                                    $kategori  =   $_POST['kategori'];
                                    $isiberita  =   $_POST['isi_berita'];
                                
                                    $update = mysqli_query($conn, "UPDATE tb_artikel SET
                                    id = '".$no++."',
                                    id_kategori = '".$kategori."',
                                    judul = '".$judul."',
                                    gambar_berita = '".$rename."',
                                    isi_berita = '".$isiberita."',
                                    created_at = null
                                    ");
                                 
                                

                                if($update){
                                    echo "<script>window.location='artikel.php?success=edit-data-successfuly'</script>";
                                }else{
                                    echo "Gagal Edit".mysqli_error($conn);
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

<?php include '../footer.php' ?>