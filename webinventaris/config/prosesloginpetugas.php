<?php 

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];



$login = mysqli_query($koneksi,"select * from petugas where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);


if($cek > 0){

	$data = mysqli_fetch_assoc($login);


	if($data['id_level']=="1"){


		$_SESSION['username'] = $username;
		$_SESSION['id_level'] = 1;
		$_SESSION['id'] = $data['id_petugas'];

		header("location:../petugas/admin/home.php");

	}else if($data['id_level']=="2"){

		$_SESSION['username'] = $username;
		$_SESSION['id_level'] = 2;
		$_SESSION['id'] = $data['id_petugas'];

		header("location:../petugas/operator/home.php");

	}else{

		header("location:../petugas/index.php?pesan=gagal");
	}	
}else{
	header("location:../petugas/index.php?pesan=gagal");
}

?>