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
                        Tambah Artikel
                    </div>
                    <div class="box-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" placeholder="Masukan Judul Artikel" class="input-control" required>
                                <label>Kategori</label>
                                <select name="kategori" required>
                                    <option value="">- Pilih Kategori -</option>
                                    <?php 
                                    $artikel = mysqli_query($conn, "SELECT * FROM tb_kementrian ORDER BY id_kementrian ASC");
                                    if (mysqli_num_rows($artikel)) { ?>
                                        <?php while ($row_kat = mysqli_fetch_array($artikel)) { ?>
                                            <option value="<?php echo $row_kat["id_kementrian"]; ?>"><?php echo $row_kat["nama_kementrian"]; ?></option>
                                        <?php } ?>
                                    <?php  } ?>
                                </select>
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="input-control">
                                <label>Isi Berita</label>
                                <textarea rows="10" cols="150" type="text" name="isi_berita" placeholder="Masukan isi berita (Resize untuk memperbesar)" class="input-control"></textarea>
                                <input type="submit" name="submit" value="simpan" class="btn">
                            </div>
                        </form>

                        <?php 
                            if(isset($_POST['submit'])){

                                // print_r($_FILES['gambar']);

                                $filename = $_FILES['gambar']['name'];
                                $tmpname = $_FILES['gambar']['tmp_name'];
                                $filesize = $_FILES['gambar']['size'];

                                $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                                $rename = time().'.'.$formatfile;

                                $allowedtype =  array('png','jpg','jpeg');

                                if(!in_array($formatfile, $allowedtype)){
                                    echo 'Failed to upload, supported files are PNG, JPG, JPEG';
                                    die;
                                }elseif($filesize > 1000000){
                                    echo 'Failed to upload, Filesize are exceeding 1MB';
                                    die;
                                }else{

                                    move_uploaded_file($tmpname, "./img/".$rename);
                                    
                                    $judul  =   $_POST['judul'];
                                    $kategori  =   $_POST['kategori'];
                                    $isiberita  =   $_POST['isi_berita'];
                                    
                                    $simpan = mysqli_query($conn, "INSERT INTO tb_artikel VALUES(
                                        null,
                                        '".$kategori."',
                                        '".$judul."',
                                        '".$rename."',
                                        '".$isiberita."',
                                        null
                                    )");

                                }

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