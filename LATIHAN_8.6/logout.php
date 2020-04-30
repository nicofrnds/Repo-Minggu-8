<?php
session_start();
if (isset($_SESSION['login'])) {
    unset($_SESSION);
    session_destroy();
    //
    echo "<script>alert('Hore Kamu Berhasil Logout !!!');</script>";
    echo "<h2>Klik <a href='index.php'>di sini</a> untuk
LOGIN kembali</h2>";
}
