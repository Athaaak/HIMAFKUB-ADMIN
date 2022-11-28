<!-- <?= 
    include '../../koneksi.php';
    ?> -->

<?php 
    $art = mysqli_query($conn, "SELECT * FROM tb_artikel WHERE id = '".$_GET['idartikel']."' ");
    $p = mysqli_fetch_object($art);
?>
    
    <!DOCTYPE html>
    <html>
        <head>
            <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="./artikel-view.css">
        </head>
    
        <body>
            <!-- Navbar -->
            <div class="page-bg">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <a class="navbar-brand" href="./main.php">
                                <img src="./img-source/aksara.png" alt="AksaraAsa" class="logo">
                                <label class="text-nav-logo">BEM ASKARA ASA <br>FK UB 2022</label>
                        </a>
                            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarMenu">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="./profil.php">Profil</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="./lembaga.php">Lembaga & Himpunan</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="https://bemfk.ub.ac.id/eskk/">E-SKK</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Kementrian & Biro
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <label class="dropdown-text">Kementrian dan Biro FK UB</label>
                                        <div class="dropdown-list">
                                            <div class="drop-logo-firstrow">
                                                <div class="logo-box">
                                                    <a href="#">
                                                        <img src="./img-source/BIRO ADMIN.png" alt="" class="drop-logo" width="75" height="75">
                                                        <label class="text-drop-logo">Biro Admin</label>
                                                    </a>
                                                </div>
                                                <div class="logo-box">
                                                    <a href="#">
                                                        <img src="./img-source/KEMENTERIAN PSDM.png" alt="" class="drop-logo"width="75" height="75">
                                                        <label class="text-drop-logo">Kementrian PSDM</label>
                                                    </a>
                                                </div>
                                                <div class="logo-box">
                                                    <a href="#">
                                                        <img src="./img-source/KEMENTERIAN DAGRI.png" alt="" class="drop-logo"width="75" height="75">
                                                        <label class="text-drop-logo">Kementrian DAGRI</label>
                                                    </a>
                                                </div>
                                                <div class="logo-box">
                                                    <a href="#">
                                                        <img src="./img-source/KEMENTERIAN PANDORA.png" alt="" class="drop-logo"width="75" height="75">
                                                        <label class="text-drop-logo">Kementrian Pandora</label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="drop-logo-secondrow">
                                                <div class="logo-box">
                                                    <a href="#">
                                                    <img src="./img-source/BIRO LITBANG.png" alt="" class="drop-logo" width="75" height="75">
                                                        <label class="text-drop-logo">Biro Litbang</label>
                                                    </a>
                                                </div>
                                                <div class="logo-box">
                                                    <a href="#">
                                                    <img src="./img-source/SPI.png" alt="" class="drop-logo" width="75" height="75">
                                                        <label class="text-drop-logo">Satuan Pengawas<br> Internal</label>
                                                    </a>
                                                </div>
                                                <div class="logo-box">
                                                    <a href="#">
                                                    <img src="./img-source/KEMENTERIAN MEDSI.png" alt="" class="drop-logo" width="75" height="75">
                                                        <label class="text-drop-logo">Kementrian Medsi</label>
                                                    </a>
                                                </div>
                                                <div class="logo-box">
                                                    <a href="#">
                                                    <img src="./img-source/KEMENTERIAN LUGRI.png" alt="" class="drop-logo" width="75" height="75">
                                                        <label class="text-drop-logo">Kementrian Lugri</label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="drop-logo-thirdrow">
                                                <div class="logo-box">
                                                    <a href="#">
                                                    <img src="./img-source/KEMENTERIAN SENIORA.png" alt="" class="drop-logo" width="75" height="75">
                                                        <label class="text-drop-logo">Kementrian Seniora</label>
                                                    </a>
                                                </div>
                                                <div class="logo-box">
                                                    <a href="#">
                                                    <img src="./img-source/KEMENTERIAN KARINOV.png" alt="" class="drop-logo" width="75" height="75">
                                                        <label class="text-drop-logo">Kementrian Karinov</label>
                                                    </a>
                                                </div>
                                                <div class="logo-box">
                                                    <a href="#">
                                                    <img src="./img-source/KEMENTERIAN SOSMA.png" alt="" class="drop-logo" width="75" height="75">
                                                        <label class="text-drop-logo">Kementrian Sosma</label>
                                                    </a>
                                                </div>
                                                <div class="logo-box">
                                                    <a href="#">
                                                    <img src="./img-source/KEMENTERIAN LH.png" alt="" class="drop-logo" width="75" height="75">
                                                        <label class="text-drop-logo">Kementrian LH</label>
                                                    </a>
                                                </div>
                                                <div class="logo-box">
                                                    <a href="#">
                                                    <img src="./img-source/KEMENTERIAN AKSPRO.png" alt="" class="drop-logo" width="75" height="75">
                                                        <label class="text-drop-logo">Kementrian Akspro</label>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="./kolegium.php">SOP Kolegium</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="./arsip.php">Arsip</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="./artikel.php">Artikel</a>
                                    </li>
                                </ul>
                            </div>
                    </div> 
                </nav>
    
                <!-- Content -->
    
                <div class="article-container">
                    <div class="judul-article">
                                <?php 
                                    $artikel = mysqli_query($conn, "SELECT * FROM tb_artikel WHERE id = '".$_GET['idartikel']."'");
                                    if (mysqli_num_rows($artikel)) { ?>
                                        
                                        <?php while ($row_kat = mysqli_fetch_array($artikel)) { ?>
                                           <div class="header"><?= $row_kat['judul']; ?></div>
                                        <?php } ?>

                                <?php  } ?>
                                <?php 
                                    $artikel = mysqli_query($conn, "SELECT * FROM tb_artikel, tb_kementrian WHERE tb_artikel.id_kategori = tb_kementrian.id_kementrian AND id = '".$_GET['idartikel']."'");
                                    if (mysqli_num_rows($artikel)) { ?>
                                        
                                        <?php while ($row_kat = mysqli_fetch_array($artikel)) { ?>
                                           <div class="date"><?= $row_kat['created_at']; ?> | <?= $row_kat['nama_kementrian']; ?></div>
                                        <?php } ?>

                                <?php  } ?>
                    </div>
                    <div class="foto-article">
                    <div class="carousel-box">
                <div class="box-photo">
                    
                                    <div class="content-article">
                                    <?php 
                                            $artikel = mysqli_query($conn, "SELECT * FROM tb_artikel WHERE id = '".$_GET['idartikel']."'");
                                                if (mysqli_num_rows($artikel)) { ?>
                                                        
                                                <?php while ($row_kat = mysqli_fetch_array($artikel)) { ?>
                                                    <div class="carousel-box">
                                                        <div class="box-news">
                                                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                                                <div class="carousel-indicators">
                                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                                </div>
                                                                <div class="carousel-inner">
                                                                    <img src="../artikel/img/<?= $row_kat['gambar_berita']; ?>" class="d-block w-100" width="900">
                                                                </div>
                                                                </div>
                                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                    <!-- <img src="../artikel/img/<?= $row_kat['gambar_berita']; ?>" class="d-block" width="900"> -->
                                    <label class="content text-break"><?= $row_kat['isi_berita']; ?></label>
                                    <?php } ?>
                         <?php  } ?>
                    </div>
                </div>
            </div>
                    </div>
                </div>
    
    
                <!-- Footer -->
            
            
                <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
            </div>
        </body>
    </html>