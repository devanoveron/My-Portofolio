<?php 
    include("../../config/koneksi.php");

    $sql = "SELECT * FROM inventaris";
    $query = mysqli_query($koneksi,$sql);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../asset/img//inven.png">
    <title>Document</title>
    <style>
        table, th, td{
            border: 2px solid black;
            padding: 10px;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
        <h1>Data Barang Inventaris</h1>
        <h2>Sekolah Menengah Kejuruan Negeri 1 Denpasar</h2>
        <hr>
        <table style="width: 80%;">
            <tr>
                <th>NO</th>
                <th>Nama Barang</th>
                <th>Kondisi</th>
                <th>Jumlah</th>
            </tr>
            <?php $no=1; ?>
            <?php while($data= mysqli_fetch_assoc($query)): ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['kondisi']; ?></td>
                <td><?= $data['jumlah']; ?></td>
            </tr>
            <?php $no++; ?>
            <?php endwhile; ?>
        </table>
    </center>
    <script>
		window.print();
	</script>
</body>
</html>