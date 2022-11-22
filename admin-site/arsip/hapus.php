<?php 
    include '../../koneksi.php';

    if(isset($_GET['idarsip'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_arsip WHERE id_arsip = '".$_GET['idarsip']."' ");
        echo "<script>window.location = './arsip.php'</script>";
    }
?>