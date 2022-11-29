<!-- <?= 
    include '../../koneksi.php';
?> -->

<!DOCTYPE html>
<html>
    <head>
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./kolegium.css">
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

            <div class="content-container">
                <div class="header-content">
                    <img src="./img-source/aksara-big.png" class="content-logo">
                    
                    <label class="header-text">SOP KOLEGIUM</label>
                </div>
            </div>

            <div class="sop-container">
                <div class="sop-box">
                    <div class="sop-header-box">
                                    <img src="./img-source/KEMENTERIAN AKSPRO.png" width="75" height="75">
                                    <label class="sop-header">Akspro</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 13 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                            
                                        </div>

                                        
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/BIRO ADMIN.png" width="75" height="75">
                                    <label class="sop-header">Biro Admin</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 1 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/KEMENTERIAN PANDORA.png" width="75" height="75">
                                    <label class="sop-header">Pandora</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 2 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/KEMENTERIAN PSDM.png" width="75" height="75">
                                    <label class="sop-header">PSDM</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 3 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/KEMENTERIAN DAGRI.png" width="75" height="75">
                                    <label class="sop-header">Dagri</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 4 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/BIRO LITBANG.png" width="75" height="75">
                                    <label class="sop-header">Biro Litbang</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 5 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/SPI.png" width="75" height="75">
                                    <label class="sop-header">Satuan Pengawas Internal</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 6 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/KEMENTERIAN MEDSI.png" width="75" height="75">
                                    <label class="sop-header">Medsi</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 7 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/KEMENTERIAN LUGRI.png" width="75" height="75">
                                    <label class="sop-header">Lugri</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 8 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/KEMENTERIAN SENIORA.png" width="75" height="75">
                                    <label class="sop-header">Seniora</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 9 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/KEMENTERIAN KARINOV.png" width="75" height="75">
                                    <label class="sop-header">Karinov</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 10 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/KEMENTERIAN SOSMA.png" width="75" height="75">
                                    <label class="sop-header">Sosma</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 11 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                    <div class="sop-header-box">
                    <img src="./img-source/KEMENTERIAN LH.png" width="75" height="75">
                                    <label class="sop-header">LH</label>
                                    <?php 
                                    $no = 1;
                                    $kementrian = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_kementrian = 12 ORDER BY id_sop");
                                    if(mysqli_num_rows($kementrian) > 0 ){
                                        while($p = mysqli_fetch_array($kementrian)){
                                        ?>  
                                    
                                        <div class="sop-content-box">
                                            <a href="<?= $p["link_sop"] ?>" class="sop-content"><?= $p["judul"] ?> | <img class="download" src="https://img.icons8.com/material/24/null/download--v1.png"/></a>
                                        </div>
                                                                    
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
                </div>
            </div>

            <!-- Footer -->

            <div class="social-text-container">
                    <label class="social-text">VISIT BEM FK UB ON</label>
            </div>
            <div class="social-container">
                <div class="social-logo-content">
                    <div class="social-logo">
                    <a href="https://www.youtube.com/@hjvfkjvjbvjhvkv ">
                            <img src="./img-source/youtube.png" width="100" height="100">
                        </a>
                        <a href="https://instagram.com/bemfkub?igshid=ZmVmZTY5ZGE=">
                            <img src="./img-source/instagram.png" width="100" height="100">
                        </a>
                        <a href="https://twitter.com/bemfkub?t=fY1yYeA7yV6R6Unv1hmWLQ&s=09">
                            <img src="./img-source/twitter.png" width="100" height="100">
                        </a>
                        <a href="https://open.spotify.com/show/4zeoWd0StssNs0ZLXl2JFw?si=5b3a523f5af94d0c">
                            <img src="./img-source/spotify.png" width="100" height="100">
                        </a>
                    </div>
                </div>
            </div>
 
        
            <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
        </div>
    </body>
</html>