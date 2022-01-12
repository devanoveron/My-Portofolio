<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM jenis WHERE id_jenis=$id";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo"
    <script>alert('dahh kehapuss!!!');document.location.href='../petugas/admin/kategori.php';</script>";
}
?>