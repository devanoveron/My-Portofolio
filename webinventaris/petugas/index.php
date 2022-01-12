<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
    <style>
        body{
            font-family: Segoe UI;
            background-color: grey;
        }
        h1{
            text-align: center;
            color: white;
        }
        input[type=text], input[type=password]{
            margin-left: 5px;
        }
        .containerlogin{
            border-radius: 30px;
        }
        .kotaklogin{
            border-radius: 0px 0px 30px 30px;
        }
    </style>
</head>
<body>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
    ?>

    <center>
    <div class="containerlogin">
        <h1>PETUGAS</h1> 
            <div class="kotaklogin">
                <form action="../config/prosesloginpetugas.php" method="post">
                    <div class="formlogin">
                        <label for="username"><b>Username</b></label><br>
                        <i class="fa fa-user"></i><input type="text" name="username" placeholder="Input Username Anda" required>
                        <br><br>
                    <label for="password"><b>Password</b></label>
                    <br>
                    <i class="fa fa-lock"></i><input type="password" name="password" placeholder="Input Password Anda" required>
                    <br>
                    <button type="submit" value="login">Login</button>
                    <br><br><br>
                    <div class="lgnpetugas">
                    <a href="../index.php">Login sebagai User</a>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </center>
</body>
</html>