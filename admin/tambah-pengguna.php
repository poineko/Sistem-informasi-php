<?php include 'header.php' ?>

        <div class="content">
                <div class="container">
                        <div class="box">
                                <div class="box-header">
                                       Tambah Pengguna
                                </div>
                                <div class="box-body">

                                        <form action="" method="POST">
                                                <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required >
                                                </div>
                                                <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" name="user" placeholder="Username" class="input-control" required >
                                                </div>
                                                <div class="form-group">
                                                        <label>Level</label>
                                                        <select name="level" class="input-control" required >
                                                                <option value=""> Pilih </option>
                                                                <option value="Super Admin"> Super Admin </option>
                                                                <option value="Admin"> Admin </option>
                                                        </select>
                                                </div>

                                                <button type="button" class="button" onclick="window.location = 'pengguna.php' ">Kembali</button>
                                                <input type="submit" name="submit" value="Simpan" class="button button-sub">

                                        </form>

                                        <?php

                                                if(isset($_POST['submit'])){
                                                        $nama = ucwords($_POST['nama']);
                                                        $user = $_POST['user'];
                                                        $level = $_POST['level'];
                                                        $pass = '12345';

                                                        $simpan = mysqli_query($conn, "INSERT INTO pengguna VALUES (
                                                                null,
                                                                '".$nama."',
                                                                '".$user."',
                                                                '".MD5($pass)."',
                                                                '".$level."',
                                                                null,
                                                                null
                                                )");

                                                        if($simpan){
                                                                echo '<div class="alert alert-sucses" >Berhasil di Simpan</div>';
                                                        }else{
                                                                echo 'Gagal di Simpan'.mysqli_error($conn);
                                                        }

                                                }

                                        ?>


                                </div>
                        </div>
                </div>
        </div>

<?php include 'footer.php' ?>