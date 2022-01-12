<?php 
    include('koneksi.php');

    if(isset($_POST['simpan'])){
        $nama = htmlspecialchars($_POST['nama']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $email = htmlspecialchars($_POST['email']);
        $nis = htmlspecialchars($_POST['nis']);
        $sql = "INSERT INTO user(nama,username,password,email,nis) VALUE('$nama','$username','$password','$email','$nis')";
        $query = mysqli_query($koneksi,$sql);
        if($query){
            echo "<script>alert('User berhasil ditambahkan!');document.location.href='../index.php';</script>";
        }
    }
?>