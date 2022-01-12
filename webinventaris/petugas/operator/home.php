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
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['id_level']==""){
		header("location:../index.php?pesan=gagal");
	}
 
    ?>
    
    <div class="wrap">
        <div class="headeroperator">
            <img class="logo" src="../../asset/img/inven.png" width="65px" height="65px">
            <h2>Aplikasi Inventaris</h2>
            <p>OPERATOR</p>
        </div>

    <div class="body">
        <div class="sidebar">

            <ul class="sidemenu">

                <li><i class="fa fa-dashboard"></i><a href="home.php">Beranda</a></li>

                <li><i class="fa fa-user"></i><a href="">Akun</a></li>

                <li><i class="fa fa-database"></i><a href="peminjaman.php">Data Peminjaman</a></li>

                <li class="has-sub"><i class="fa fa-plus-circle"></i><a href="#">Tambah</a>

                    <ul class="sidedrop">
                        <li><a href="tambahbarang.php">Barang</a></li>
                    </ul>
                </li>\<li><i class="fa fa-power-off"></i><a href="../../config/logoutpetugas.php">LogOut</a></li>
            </ul>
        </div>

        <div class="konten">
            <a href="barang.php" class="btn btn-warning"><i class="fa fa-shopping-cart"></i> BARANG  <i class="fa fa-arrow-circle-right" style="margin-left: 78%;"></i></a>
            <a href="peminjaman.php" class="btn btn-info"><i class="fa fa-qrcode"></i> PEMINJAMAN  <i class="fa fa-arrow-circle-right" style="margin-left: 70%;"></i></a>
        </div>
    
    </div>

    
</body>
</html>