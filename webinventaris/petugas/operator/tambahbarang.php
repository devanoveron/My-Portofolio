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
  include '../../config/koneksi.php'; 
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

                <li><i class="fa fa-dashboard"></i><a class="active" href="home.php">Beranda</a></li>

                <li><i class="fa fa-user"></i><a href="">Akun</a></li>

                <li><i class="fa fa-database"></i><a href="peminjaman.php">Data Peminjaman</a></li>

                <li class="has-sub"><i class="fa fa-plus-circle"></i><a href="#">Tambah</a>

                    <ul class="sidedrop">
                        <li><a href="tambahbarang.php">Barang</a></li>
                    </ul>
                </li>
                <li><i class="fa fa-power-off"></i><a href="../../config/logoutpetugas.php">LogOut</a></li>
            </ul>
        </div>

    </div>
    
</div>
        <div class="kontentambah">
                <h3>TAMBAH DATA BARANG</h3>
                <form class="need-validation" novalidate action="../../config/tambahbarangpetugas.php" method="post" enctype="multipart/form-data">
                    <div class="card" style="width: 90%;">
                    <div class="card-header">
                     
                    </div>
                     <div class="form">   
                        <div class="form-group">
                            <label for="nb">Nama Barang</label>
                            <input type="text" class="form-control is" name="nama" id="nb" placeholder="masukan nama barang" required>
                          </div>
                          <div class="form-group">
                            <label for="k">Kondisi</label>
                            <select class="form-control" name="kondisi" id="k1" required>
                                <option selected disabled value="">pilih kondisi</option>
                                <option>Baik</option>
                                <option>Rusak</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="j">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" id="formGroupExampleInput" placeholder="masukan jumlah barang" required>
                          </div>
                          <div class="form-group">
                            <label for="k1">Kategori</label>
                            <select class="form-control" name="id_jenis" id="k1"  required>
                                <option selected disabled value="">pilih kategori</option>
                                <?php 
                                  $query = mysqli_query($koneksi, "SELECT * FROM jenis");
                                  while($row = mysqli_fetch_array($query)){ ?>
                                    <option value="<?php print $row['id_jenis']?>"><?php print $row['nama_jenis']?></option> <?php } ?>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="r1">Ruang</label>
                            <select class="form-control" name="id_ruang" id="r1" placeholder="pilih kategori barang" required>
                                <option selected disabled value="">pilih ruang</option>
                                <?php 
                                  $query = mysqli_query($koneksi, "SELECT * FROM ruang");
                                  while($row = mysqli_fetch_array($query)){ ?>
                                    <option value="<?php print $row['id_ruang']?>"><?php print $row['nama_ruang']?></option> <?php } ?>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="kb">Kode Barang</label>
                            <input type="text" name="kode_inventaris" class="form-control" id="kb" placeholder="masukan kode barang" required>
                          </div>
                          <div class="form-group">
                          <label for="kb">Keterangan Barang</label>
          <textarea name="keterangan" class="form-control" cols="30" rows="5" placeholder="masukan keterangan" required></textarea>
        </div>
                          <br>
                          <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                          <a href="barang.php" class="btn btn-danger">Kembali</a>   
                  </form>
                  <br><br>
                </div>
                </div>
            
            </div>

    
</body>
</html>