<?php
include 'conn.php';
include 'conf.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>PDO CRUDSRUD</title>
    <link rel="stylesheet" type="text/css" href="assets/css.css">
</head>

<body>
    <div class="top-gray"></div>
    <div class="header">

        <?php


        session_start();
        //pemeriksaan session
        if (isset($_SESSION['login'])) { //jika sudah login
            //menampilkan isi session
            $username = $_SESSION['login'];
            $hasil = $koneksi->prepare("SELECT * FROM tb_user  ORDER BY username='$username'");
            $hasil->execute();
            $data = $hasil->fetchAll();

            foreach ($data as $koreksi) {
                $meong = $koreksi['nama'];
                $hak = $koreksi['hak'];
            }
            if ($hak != 1) {
                echo " <div class='big-logo'>Latihan CRUDSRUD - Halaman Admin</div>";
            } else {
                echo " <div class='big-logo'>Latihan CRUDSRUD - Halaman Operator</div>";
            }

            echo "<h3>Selamat Datang " . $meong . "</h3>";
        } else {
            //session belum ada artinya belum login
            die("Anda belum login! Anda tidak berhak masuk ke halaman ini.Silahkan login <a href='../index.php'>di sini</a>");
        }
        ?>

        <?php include 'menu.php'; ?>
    </div>
    <div class="content">
        <div class="container">
            <?php
            if (!is_null(get('p'))) {
                switch (get('p')) {
                    case 'home':
                        inc('home');
                        break;
                    case 'sekolah':
                        switch (get('m')) {
                            case 'home':
                                inc('tampilan/sekolah/all');
                                break;
                            case 'add':
                                inc('tampilan/sekolah/add');
                                break;
                            case 'edit':
                                inc('tampilan/sekolah/edit');
                                break;
                            default:
                                inc('tampilan/sekolah/all');
                                break;
                        }
                        break;
                }
            } else {
                inc('home');
            } ?>
        </div>
    </div>
</body>

</html>