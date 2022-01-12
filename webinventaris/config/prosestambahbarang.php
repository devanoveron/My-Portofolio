<?php 

    include 'koneksi.php';

    session_start();

    if(isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $kondisi = $_POST['kondisi'];
        $keterangan = $_POST['keterangan'];
        $jumlah = $_POST['jumlah'];
        $id_jenis = $_POST['id_jenis'];
        $id_ruang = $_POST['id_ruang'];
        $kode_inventaris = $_POST['kode_inventaris'];
        $id_petugas = $_SESSION['id'];

        $query = mysqli_query($koneksi, "INSERT INTO inventaris VALUES (NULL,
        '$nama',
        '$kondisi',
        '$keterangan',
        '$jumlah',
        '$id_jenis',
        NOW(),
        '$id_ruang',
        '$kode_inventaris',
        '$id_petugas')");

        if($query){
            echo "<script>alert('Data berhasil ditambahkan!');document.location.href='../petugas/admin/tambahbarang.php';</script>";
        }
    }
?>