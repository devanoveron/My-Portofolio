<?php
include('../../config/koneksi.php');
session_start();

$datas = mysqli_query($koneksi, "SELECT * FROM peminjaman INNER JOIN inventaris ON peminjaman.id_inventaris= inventaris.id_inventaris");

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
        <h1>Data Peminjaman Barang</h1>
        <h2>Sekolah Menengah Kejuruan Negeri 1 Denpasar</h2>
        <hr>
        <table style="width: 80%;">
            <tr>
                <th>NO</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Kembali</th>
                <th>Status</th>
            </tr>
            <?php $no = 1; 
            foreach ($datas as $data) {
            ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jumlah_pinjam'] ?></td>
                <td><?= $data['tanggal_pinjam'] ?></td>
                <td><?= $data['tanggal_kembali'] ?></td>
                <td><?= $data['status_peminjaman'] ?></td>
            </tr>
            <?php $no++;
            } ?>
        </table>
    </center>
    <script>
		window.print();
	</script>
</body>
</html>