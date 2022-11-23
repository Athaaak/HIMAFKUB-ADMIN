<?php 
    include '../../koneksi.php';

    if(isset($_GET['idartikel'])){

        $gambar = mysqli_query($conn, "SELECT gambar_berita FROM tb_artikel WHERE id = '".$_GET['idartikel']."' ");

        if(mysqli_num_rows($gambar) > 0){

            $p = mysqli_fetch_object($gambar);
            if(file_exists("../artikel/img/".$p->gambar_berita)){

                unlink("../artikel/img/".$p->gambar_berita);
            }
            
        }
        $delete = mysqli_query($conn, "DELETE FROM tb_artikel WHERE id = '".$_GET['idartikel']."' ");
        echo "<script>window.location = './artikel.php'</script>";
    }
?>