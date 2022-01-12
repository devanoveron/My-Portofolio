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
    include("../../config/koneksi.php");

    $sql = "SELECT * FROM inventaris";
    $query = mysqli_query($koneksi,$sql);
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
                <li><i class="fa fa-power-off"></i><a href="">LogOut</a></li>
            </ul>
        </div>

    </div>
    
</div>
        <div class="kontenbarang">
                <h3>DATA BARANG</h3>
                <div class="col">
                  <div class="card" style="width: 100%;">
                    <div class="card-header">
                      <a href="tambahbarang.php" class="btn btn-primary">Tambah</a>
                      <a href="home.php" class="btn btn-danger">Kembali</a>
                      <a href="cetakbarang.php" class="btn btn-success">Cetak</a>
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
                            <?php $no=1; ?>
                            <?php while($data= mysqli_fetch_assoc($query)): ?>
                          <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['kondisi']; ?></td>
                            <td><?= $data['jumlah']; ?></td>
                            <td><a href="detailbarang.php?id=<?=$data['id_inventaris']?>"><i class="fa fa-eye" style="color: green;"></i></a> <a href="editbarang.php?id=<?=$data['id_inventaris']?>"><i class="fa fa-edit" style="color: blue;"></i></a> <a href="../../config/deletebarang.php?id=<?= $data['id_inventaris']; ?>" onclick="return confirm('yakin Data ini akan dihapus?')"> <i class="fa fa-trash" style="color: red;"></i></a></td>
                          </tr>
                          <?php $no++; ?>
                            <?php endwhile; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>

    
</body>
</html>