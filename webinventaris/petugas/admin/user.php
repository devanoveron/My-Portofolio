<?php 
  include '../../config/koneksi.php';
  session_start();

  $datas = mysqli_query($koneksi, "SELECT * FROM user");

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
                <h3>DATA USER</h3>
                <div class="col">
                  <div class="card" style="width: 100%;">
                    <div class="card-header">
                      <a href="pengguna.php" class="btn btn-danger">Kembali</a>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA USER</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">NIS</th>
                            <th scope="col">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; 
                          foreach ($datas as $data) {
                            ?>
                          <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['username'] ?></td>
                            <td><?= $data['nis'] ?></td>
                            <td> <a href="../../config/deleteuser.php?id=<?= $data['id_user']; ?>" onclick="return confirm('yakin Data ini akan dihapus?')"> <i class="fa fa-trash" style="color: red;"></i></a></td>
                          </tr>
                          <?php $no++;
                          } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>

    
</body>
</html>