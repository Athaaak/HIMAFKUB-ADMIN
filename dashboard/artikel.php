<!-- <?= 
    include '../koneksi.php';
    ?> -->

<!DOCTYPE html>
<html>
    <head>
        <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./artikel.css">
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
                <div class="article-box">
                    <!-- <a class="article" href="#">
                        <div class="photo-article">
                            <img src="./img-source/article1.png" class="a-photo d-block" width="400px">
                        </div>
                        
                        <div class="article-desc">
                            <h1 class="a-h1">YUK PINDAH FASKES BPJS KE KLINIK UB</h1>
                            <h4 class="a-h4">MINGGU, 28 AGUSTUS 2022 | SOSMA</h4>
                             
                        </div>
                    </a> -->
                    <?php 
                                    $no = 1;
                                    $artikel = mysqli_query($conn, "SELECT * FROM tb_artikel, tb_kementrian WHERE tb_artikel.id_kategori = tb_kementrian.id_kementrian ORDER BY id DESC");
                                    if(mysqli_num_rows($artikel) > 0 ){
                                        while($p = mysqli_fetch_array($artikel)){
                                        ?>  
                                        
                                        <a class="article" href="artikel-view.php?idartikel=<?= $p['id']?>">
                                            <div class="photo-article">
                                                <img src="../admin-site/artikel/img/<?= $p['gambar_berita']; ?>" class="a-photo d-block" width="400px">
                                            </div>
                                            
                                            <div class="article-desc">
                                                <h1 class="a-h1"><?= $p['judul']; ?></h1>
                                                <h4 class="a-h4"><?= $p['created_at']; ?> | <?= $p['nama_kementrian']; ?></h4>
                                                
                                            </div>
                                        </a>
                                        
                                                                    
                                        <?php }} 
                                    else { ?>  
                                                        
                                                        <tr>
                                    <div class="missing">
                                        <td colspan="5">Data masih kosong.</td>
                                    </div>
                                </tr>
                                                        
                            <?php }
                                                        
                        ?>
            </div>


            <!-- Footer -->
            
        
        
            <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
        </div>
    </body>
</html>