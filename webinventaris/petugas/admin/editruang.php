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

                <li><i class="fa fa-dashboard"></i><a class="active" href="home.html">Beranda</a></li>

                <li><i class="fa fa-user"></i><a href="">Akun</a></li>

                <li><i class="fa fa-database"></i><a href="peminjaman.html">Data Peminjaman</a></li>

                <li class="has-sub"><i class="fa fa-plus-circle"></i><a href="#">Tambah</a>

                    <ul class="sidedrop">
                        <li><a href="tambahbarang.html">Barang</a></li>
                        <li><a href="tambahkategori.html">Kategori</a></li>
                        <li><a href="tambahruang.html">Ruang</a></li>
                        <li><a href="tambahpetugas.html">Petugas</a></li>
                    </ul>
                </li>
                <li><i class="fa fa-power-off"></i><a href="">LogOut</a></li>
            </ul>
        </div>

    </div>
    
</div>

<?php 
  include('../../config/koneksi.php');
  $id = $_GET['id'];
  $query = mysqli_query($koneksi, "SELECT * FROM ruang WHERE id_ruang='$id'");
  $data = mysqli_fetch_assoc($query);

?>

        <div class="kontentambah">
                <h3>EDIT DATA RUANG</h3>
                <form class="need-validation" action="../../config/proseseditruang.php" novalidate method="post">
                    <div class="card" style="width: 90%;">
                     <div class="form">   
                        <div class="form-group">
                            <label for="nb">Nama Ruang</label>
                            <input type="text" class="form-control is" value="<?= $data['nama_ruang']?>" name="namaruang" id="nb" placeholder="masukan nama ruang baru" required>
                            <input type="hidden" class="form-control is" value="<?= $data['id_ruang']?>" name="id" id="nb" placeholder="masukan nama ruang baru" required>
                          </div>
                          <div class="form-group">
                            <label for="j">Kode Ruang</label>
                            <input type="text" class="form-control" value="<?= $data['kode_ruang']?>" name="koderuang" id="formGroupExampleInput" placeholder="masukan kode ruang baru" required>
                          </div>
                          <div class="form-group">
                            <label for="j">keterangan</label>
                            <input type="text" class="form-control" value="<?= $data['keterangan']?>" name="keterangan" id="formGroupExampleInput" placeholder="masukan kode ruang baru" required>
                          </div>
                          <br><br>
                          <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                          <a href="ruang.html" class="btn btn-danger">Kembali</a>   
                  </form>
                  <br><br>
                </div>
                </div>
            
            </div>

    
</body>
</html>