<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM ruang WHERE id_ruang=$id";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo"
    <script>alert('dahh kehapuss!!!');document.location.href='../petugas/admin/ruang.php';</script>";
}
?>