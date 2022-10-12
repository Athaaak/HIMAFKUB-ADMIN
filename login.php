<?php 
    session_start();
    include 'koneksi.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Halaman Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="login-style.css">
    </head>

    <body>
        <!-- partial:index.partial.html -->
    <div class="page-login">
        <form action="" method="POST">
            <div class="box">
                <div class="header-text">HIMAFKUB-ADMIN</div>
                <div class="box-body">
                        <label>Masukkan Username</label>
                        <div class="form-field">
                            <input type="text" name="user" placeholder="Username" required/>
                        </div>

                        <label>Masukkan Password</label>
                        <div class="form-field">
                            <input type="password" name="pass" placeholder="Password" required/>
                        </div>
                        <div class="form-field-button">
                            <button class="btn-register" name="register" type="registers">Register</button>
                            <button class="btn-login" name="submit" type="submit">Log in</button>
                        </div>
                </form>

                <div class="text-confirmation">
                <?php 
                    if(isset($_POST['submit'])){
                        $user = mysqli_real_escape_string($conn, $_POST['user']);
                        $pass = $_POST['pass'];

                        $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' ");
                        if(mysqli_num_rows($cek) > 0){
                            $ada = mysqli_fetch_object($cek);
                            if(md5($pass) == $ada->password){
                                $_SESSION['status_login'] = true;
                                $_SESSION['uid'] = $ada ->id;
                                $_SESSION['uname'] = $ada ->nama;
                                $_SESSION['ulevel'] = $ada ->level;

                                echo "<script>window.location = 'admin-site/dashboard.php' </script>";
                            }
                            else{
                                echo "Password salah.";
                            }
                        }else{
                            echo "Username tidak ditemukan.";
                        }
                    }
                ?>
                </div>
            </div>
    </div>
    

<!-- partial -->
    </body>
</html>