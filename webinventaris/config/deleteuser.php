<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id_user=$id";
$query = mysqli_query($koneksi,$sql);
if($query){
    echo"
    <script>alert('Berhasil dihapus!');document.location.href='../petugas/admin/user.php';</script>";
}
?>