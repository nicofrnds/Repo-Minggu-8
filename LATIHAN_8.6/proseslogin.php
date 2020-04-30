<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = mysqli_connect("localhost", "root", "", "crud_pdo");
$data = mysqli_query($koneksi, "select * from tb_user where username='$username'");
$koreksi = mysqli_fetch_array($data);

//periksa login
if ($koreksi['username'] == $username) {
    if ($koreksi['password'] == $password) {
        if ($koreksi['hak'] == 1) {

            $_SESSION['login'] = $username;

            header("location:admin/index.php?=admin");
        } else {
            $_SESSION['login'] = $username;

            header("location:admin/index.php?=operator");
        }
    } else {
        echo "<script>alert('Password Kamu Salah');</script>";
        echo "Silahkan Login <a href='index.php'>LOGIN</a>";
    }
} else {
    echo "<script>alert('Username kamu belum terdaftar');</script>";
    echo "Silahkan Login <a href='index.php'>LOGIN</a>";
}
