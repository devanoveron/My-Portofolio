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
        <div class="kontentambah">
                <h3>TAMBAH DATA PETUGAS</h3>
                <form class="need-validation" novalidate method="post" action="../../config/prosestambahpetugas.php">
                    <div class="card" style="width: 90%;">
                     <div class="form">   
                        <div class="form-group">
                            <label for="nb">Nama Petugas</label>
                            <input type="text" class="form-control is" name="nama_petugas" id="nb" placeholder="masukan nama petugas" required>
                          </div>
                          <div class="form-group">
                            <label for="j">Username</label>
                            <input type="text" class="form-control" name="username" id="formGroupExampleInput" placeholder="masukan username" required>
                          </div>
                          <div class="form-group">
                            <label for="j">Password</label>
                            <input type="password" class="form-control" name="password" id="formGroupExampleInput" placeholder="masukan password" required>
                          </div>
                          <div class="form-group">
                            <label for="j">Level Petugas</label>
                            <select class="form-control" name="id_level" id="k1"  required>
                                <option selected disabled value="">pilih level</option>
                                <?php 
                                  $query = mysqli_query($koneksi, "SELECT * FROM level");
                                  while($row = mysqli_fetch_array($query)){ ?>
                                    <option value="<?php print $row['id_level']?>"><?php print $row['nama_level']?></option> <?php } ?>
                              </select>
                          </div>
                          <br><br>
                          <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                          <a href="petugas.php" class="btn btn-danger">Kembali</a>   
                  </form>
                  <br><br>
                </div>
                </div>
            
            </div>

    
</body>
</html>