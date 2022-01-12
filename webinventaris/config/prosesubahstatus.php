<?php

include 'koneksi.php';

session_start();

if (isset($_POST['ubah'])) {
  $id = htmlspecialchars( $_POST['id']);
  $status_peminjaman = htmlspecialchars( $_POST['status_peminjaman']);

  $update ="UPDATE peminjaman SET status_peminjaman='$status_peminjaman' WHERE id_peminjaman='$id'";
  $query= mysqli_query($koneksi,$update);
}

if ($query) {
  echo "<script>alert('Data berhasil diubah!');document.location.href='../petugas/admin/peminjaman.php';</script>";
}
