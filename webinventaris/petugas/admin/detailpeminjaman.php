<?php
include('../../config/koneksi.php');
session_start();
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM peminjaman INNER JOIN inventaris ON peminjaman.id_inventaris= inventaris.id_inventaris WHERE id_peminjaman='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../asset/img//inven.png">
    <link rel="stylesheet" href="../../vendor/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <img class="logo" src="../../asset/img/inven.png" width="65px" height="65px">
            <h2>Aplikasi Inventaris</h2>
            <p>ADMIN</p>
        </div>

    <div class="body">
        <div class="sidebar">

            <ul class="sidemenu">

                <li><i class="fa fa-dashboard"></i><a class="active" href="home.php">Beranda</a></li>

                <li><i class="fa fa-user"></i><a href="">Akun</a></li>

                <li><i class="fa fa-database"></i><a href="peminjaman.php">Data Peminjaman</a></li>

                <li class="has-sub"><i class="fa fa-plus-circle"></i><a href="#">Tambah</a>

                    <ul class="sidedrop">
                        <li><a href="tambahbarang.php">Barang</a></li>
                        <li><a href="tambahkategori.php">Kategori</a></li>
                        <li><a href="tambahruang.php">Ruang</a></li>
                        <li><a href="tambahpetugas.php">Petugas</a></li>
                    </ul>
                </li>
                <li><i class="fa fa-power-off"></i><a href="../../config/logoutpetugas.php">LogOut</a></li>
            </ul>
        </div>

    </div>
    
</div>
        <div class="kontenbarang">
                <h3>DETAIL PEMINJAMAN</h3>
                <div class="col">
                  <div class="card" style="width: 100%;">
                    <div class="card-header">
                      <a href="peminjaman.php" class="btn btn-danger">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="detailbrg">
                            <p>Nama Barang       : <?= $data['nama'] ?></p>
                            <p>Jumlah Pinjam     : <?= $data['jumlah_pinjam'] ?></p>
                            <p>Tgl Pinjam        : <?= $data['tanggal_pinjam'] ?></p>
                            <p>Tgl Kembali       : <?= $data['tanggal_kembali'] ?></p>
                            <form action="../../config/prosesubahstatus.php" method="post">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status_peminjaman" id="">
                                        <option disabled selected value=""><?= $data['status_peminjaman']?></option>
                                        <option value="">Sudah Dikembalikan</option>
                                        <option value="">Belum Dikembalikan</option>
                                    </select>
                                </div>
                                <button class="btn btn-success" name="ubah">Ubah Status</button>
                            </form>
                            
                        </div>
                    </div>
                  </div>
                </div>
            </div>

    
</body>
</html>