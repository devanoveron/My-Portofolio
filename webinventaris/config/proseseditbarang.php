<?php
    include('koneksi.php');

if(isset($_POST['edit'])){
    $id= htmlspecialchars($_POST['id']);
    $nama = htmlspecialchars($_POST['nama']);
    $kondisi = htmlspecialchars($_POST['kondisi']);
    $jumlah = htmlspecialchars($_POST['jumlah']);
    $id_jenis = htmlspecialchars($_POST['id_jenis']);
    $id_ruang = htmlspecialchars($_POST['id_ruang']);
    $kode_inventaris = htmlspecialchars($_POST['kode_inventaris']);

    $update = "UPDATE inventaris SET nama='$nama', kondisi='$kondisi', jumlah='$jumlah', id_jenis='$id_jenis', id_ruang='$id_ruang', kode_inventaris='$kode_inventaris' WHERE id_inventaris='$id'";
    $query = mysqli_query($koneksi,$update);
    if($query){
        echo "<script>alert('Data berhasil diubah!');document.location.href='../petugas/admin/barang.php';</script>";
    }
}
?>