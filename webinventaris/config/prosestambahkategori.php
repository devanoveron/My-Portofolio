<?php 

    include 'koneksi.php';

    session_start();

    if (isset($_POST['simpan'])) {
        $nama_jenis = $_POST['nama_jenis'];
        $kode_jenis = $_POST['kode_jenis'];
        $keterangan = $_POST['keterangan'];
      
        $query = mysqli_query($koneksi, "insert into jenis values (
          NULL,
          '$nama_jenis',
          '$kode_jenis',
          '$keterangan'
        )"); }

        if($query){
            echo "<script>alert('Data berhasil ditambahkan!');document.location.href='../petugas/admin/tambahkategori.php';</script>";
        }

?>