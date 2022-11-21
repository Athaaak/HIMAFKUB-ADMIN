<?php 
    include '../../koneksi.php';

    if(isset($_GET['idsop'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_sop WHERE id_sop = '".$_GET['idsop']."' ");
        echo "<script>window.location = './sop.php'</script>";
    }
?>