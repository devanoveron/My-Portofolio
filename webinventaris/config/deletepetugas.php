<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM petugas WHERE id_petugas=$id";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo"
    <script>alert('dahh kehapuss!!!');document.location.href='../petugas/admin/petugas.php';</script>";
}
?>