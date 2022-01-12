<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM peminjaman WHERE id_peminjaman=$id";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo"
    <script>alert('dahh kehapuss!!!');document.location.href='../petugas/admin/peminjaman.php';</script>";
}
?>