<?php
include('../config/koneksi.php');
$datas = mysqli_query($koneksi, "SELECT * FROM inventaris");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../asset/img//inven.png">
  <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="wrap">
    <div class="headeruser">
      <img class="logo" src="../asset/img/inven.png" width="65px" height="65px">
      <h2>Aplikasi Inventaris</h2>
      <p>USER</p>
    </div>

    <div class="body">
      <div class="sidebar">

        <ul class="sidemenu">

          <li><i class="fa fa-dashboard"></i><a class="active" href="home.php">Beranda</a></li>

          <li><i class="fa fa-user"></i><a href="">Akun</a></li>

          <li><i class="fa fa-database"></i><a href="peminjaman.php">Data Peminjaman</a></li>

          <li><i class="fa fa-power-off"></i><a href="../config/logout.php">LogOut</a></li>
        </ul>
      </div>

    </div>

  </div>
  <div class="kontenbarang">
    <div class="col">
      <div class="card" style="width: 100%;">
        <div class="card-header">
          <h3>DATA BARANG</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">KONDISI</th>
                <th scope="col">JUMLAH</th>
                <th scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($datas as $data) {
              ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                  <td><?= $data['nama'] ?></td>
                  <td><?= $data['kondisi'] ?></td>
                  <td><?= $data['jumlah'] ?></td>
                  <td><a href="detailbarang.php?id=<?= $data['id_inventaris'] ?>"><i class="fa fa-eye" style="color: green;"></i></a>
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