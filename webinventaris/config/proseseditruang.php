<?php

include 'koneksi.php';
    $id = $_POST['id'];
    $nama_ruang = $_POST['namaruang'];
    $kode_ruang = $_POST['koderuang'];
    $keterangan = $_POST['keterangan'];

    $update = mysqli_query($koneksi, "UPDATE ruang SET nama_ruang='$nama_ruang', kode_ruang='$kode_ruang', keterangan='$keterangan' WHERE id_ruang='$id'");

    if ($update) {
        echo "<script>alert('Data berhasil di edit!');document.location.href='../petugas/admin/ruang.php';</script>";
    }
