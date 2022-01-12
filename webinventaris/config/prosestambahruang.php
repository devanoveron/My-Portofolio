<?php 

    include 'koneksi.php';

    session_start();

    if (isset($_POST['simpan'])) {
        $nama_ruang = $_POST['nama_ruang'];
        $kode_ruang = $_POST['kode_ruang'];
        $keterangan = $_POST['keterangan'];
      
        $query = mysqli_query($koneksi, "insert into ruang values (
          NULL,
          '$nama_ruang',
          '$kode_ruang',
          '$keterangan'
        )"); }

        if($query){
            echo "<script>alert('Data berhasil ditambahkan!');document.location.href='../petugas/admin/tambahruang.php';</script>";
        }

?>