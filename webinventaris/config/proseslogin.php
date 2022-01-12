<?php

session_start();

include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND  password='$password'");

$cek = mysqli_num_rows($data);
$data = mysqli_fetch_assoc($data);
if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION['id_user'] = $data['id_user'];
    header("location:../user/home.php");
}else{
    header("location:../index.php?pesan=gagal");
}
?>