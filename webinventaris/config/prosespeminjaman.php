<?php 
include('koneksi.php');

$id_inventaris = $_POST['id'];
$id_user = $_POST['id_user'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];

$query3 = mysqli_query($koneksi,"SELECT * FROM inventaris WHERE id_inventaris='$id_inventaris' ");
$data = mysqli_fetch_assoc($query3);
$stok = $data['jumlah'] - $jumlah;
if($jumlah > $data['jumlah']){
    echo "<script>alert('stok barang kurang !');document.location.href='../user/home.php';</script>";
}else{

    
    $query = mysqli_query($koneksi,"INSERT INTO peminjaman VALUES ('','$id_inventaris','$jumlah',NOW(),'$tanggal','Belum dikembalikan','$id_user')");
    if($query){
        $query2 = mysqli_query($koneksi,"UPDATE inventaris SET jumlah='$stok' WHERE id_inventaris='$id_inventaris'");
        echo "<script>alert('barang berhasil dipinjam!');document.location.href='../user/home.php';</script>";
    }
}
