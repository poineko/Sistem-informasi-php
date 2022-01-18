<?php
        session_start();
        include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LoginScreen</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
        <div class="LoginScreen">
                <div class="box box-login">
                        <div class="box-header text-center">
                                Login
                        </div>
                        <div class="box-body">

                                <?php
                                        if(isset($_GET['msg'])){
                                                echo "<div class='alert alert-error text-center'>".$_GET['msg']."</div>";
                                        }
                                ?>

                                <form action="" method="POST">
                                        <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="user" placeholder="Username" class="input-control" >
                                        </div>
                                        <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="pass" placeholder="Password" class="input-control" >
                                        </div>
                                        <input type="submit" name="submit" value="Login" class="button">
                                </form>
                                <?php
                                        if(isset($_POST['submit'])){

                                                $user = $_POST['user'];
                                                $pass = $_POST['pass'];
                                                
                                                $cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$user."' ");
                                                if(mysqli_num_rows($cek) > 0 ) {

                                                        $d = mysqli_fetch_object($cek);
                                                        if(md5($pass) == $d->password){

                                                                $_SESSION['status login'] = true;
                                                                $_SESSION['uid']          = $d->id;
                                                                $_SESSION['unama']        = $d->nama;              
                                                                $_SESSION['ulevel']       = $d->level;

                                                                echo " <script>window.location = 'admin/index.php' </script> " ;

                                                        } else {
                                                                echo '<div class="alert alert-error"> Password Anda Salah </div>';
                                                        }
                                                } else {
                                                        echo '<div class="alert alert-error"> Username tidak ditemukan </div>';
                                                }

                                        }
                                ?>
                               
                        </div>
                        <div class="box-footer text-center">
                                <a href="index.php">Home</a>
                        </div>
                </div>
        </div>
</body>
</html>