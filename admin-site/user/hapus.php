<?php 
    include '../../koneksi.php';

    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_admin WHERE id = '".$_GET['id']."' ");
        echo "<script>window.location = './user.php'</script>";
    }
?>