<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM inventaris WHERE id_inventaris=$id";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo"
    <script>alert('dahh kehapuss!!!');document.location.href='../petugas/admin/barang.php';</script>";
}
?>