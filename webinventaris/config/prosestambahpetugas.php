<?php 

    include 'koneksi.php';

    session_start();

    if(isset($_POST['simpan'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_petugas = $_POST['nama_petugas'];
        $id_level = $_POST['id_level'];

        $query = mysqli_query($koneksi, "INSERT INTO petugas VALUES (NULL,
        '$username',
        '$password',
        '$nama_petugas',
        '$id_level')");

        if($query){
            echo "<script>alert('Data berhasil ditambahkan!');document.location.href='../petugas/admin/tambahpetugas.php';</script>";
        }
    }

?>