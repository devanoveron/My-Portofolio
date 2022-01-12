<?php

include 'koneksi.php';

session_start();

if (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $nama_jenis = $_POST['nama_jenis'];
  $kode_jenis = $_POST['kode_jenis'];
  $keterangan = $_POST['keterangan'];

  $update = mysqli_query($koneksi, "UPDATE jenis SET nama_jenis='$nama_jenis', kode_jenis='$kode_jenis', keterangan='$keterangan' WHERE id_jenis='$id'");
}

if ($update) {
  echo "<script>alert('Data berhasil ditambahkan!');document.location.href='../petugas/admin/kategori.php';</script>";
}
