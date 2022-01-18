<?php
        session_start();
        include '../koneksi.php';
        if(!isset($_SESSION['status login'])){
                echo "<script>
                window.location = '../login.php?msg=Harap Login Terlebih Dahulu !!!'
                      </script>";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Admin</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
        <div class="navbar">
                <div class="container">
                        <h2 class="nav-brand float-left"><a href="index.php"> Basecamp </a></h2>
                        <ul class="nav-menu float-left">
                                <li>
                                        <a href="index.php">Dasboard</a>
                                </li>
                                <?php if($_SESSION['ulevel'] == 'Super Admin'){ ?>
                                <li> <a href="pengguna.php">Pengguna</a> </li>
                                <?php }elseif ($_SESSION['ulevel'] == 'Admin') { ?>

                                <li> <a href="jurusan.php">Sekte</a> </li>

                                <li> <a href="galeri.php">Galeri</a> </li>

                                <li> <a href="informasi.php">Informasi</a> </li>
                                <li>
                                        <a href="#">Pengaturan <i class="fa fa-caret-down"></i> </a>

                                        <ul class="dropdown">
                                                <li> <a href="identitas-sekolah.php">Identitas Basecamp</a> </li>

                                                <li> <a href="tentang-sekolah.php">Tentang Basecamp</a> </li>

                                                <li> <a href="kepala-sekolah.php">Kepala Basecamp</a> </li>
                                        </ul>
                                </li>
                                <?php } ?>
                                <li>
                                        <a href=""> <?= $_SESSION['unama'] ?> (<?= $_SESSION['ulevel'] ?>) <i class="fa fa-caret-down"></i> </a>
                                        <ul class="dropdown">
                                                <li>
                                                        <a href="ubah-password.php">Ubah Password</a>
                                                </li>
                                                <li>
                                                        <a href="logout.php">Keluar</a>
                                                </li>
                                        </ul>
                                </li>
                        </ul>
                        <div class="clearfix "></div>
                </div>
        </div>