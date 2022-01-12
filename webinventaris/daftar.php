<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="icon" href="asset/img//inven.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Daftar</title>
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
        .formdaftar{
            padding-top: 10px;
        }
        .formdaftar input[type=email], input[type=number]{
            width: 65%;
            padding: 10px;
            border: 1px solid black;
            border-radius: 10px;
        }
        button[type=submit]{
            margin-top: 2%;
            background-color: #1D87BE;
            border: none;
            width: 100px;
            height: 40px;
            border-radius: 20px;
            color: white;
        }
        button:hover{
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <center>
    <div class="containerdaftar">
        <h1>DAFTAR</h1> 
            <div class="kotakdaftar">
                <form action="config/prosestambahuser.php" method="post">
                    <div class="formdaftar">
                        <label for="username"><b>Nama</b></label><br>
                        <input type="text" name="nama" placeholder="Input Nama Anda" required>
                        <br><br>
                        <label for="username"><b>Username</b></label><br>
                        <input type="text" name="username" placeholder="Input Username Anda" required>
                        <br><br>
                    <label for="password"><b>Password</b></label>
                    <br>
                    </i><input type="password" name="password" placeholder="Input Password Anda" required>
                    <br><br>
                        <label for="Email"><b>Email</b></label><br>
                        <input type="email" name="email" placeholder="Input Email Anda" required>
                        <br><br>
                    <label for="NIS"><b>NIS</b></label>
                    <br>
                    <input type="number" name="nis" placeholder="Input NIS Anda" required>
                    <br>
                </div>
                <button type="submit" name="simpan" value="Simpan">Simpan</button>
                </form>
            </div>
        </div>
    </center>
</body>
</html>