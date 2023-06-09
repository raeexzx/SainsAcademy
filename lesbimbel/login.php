<?php
include 'koneksi.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <h4>Get started with our app,just create an 
                account and enjoy the experience</h4>
            <form action="login_sesi.php" method="post">
                <input type="username" name="nama_siswa" id="nama_siswa" placeholder="username" autocomplete="off" required>
                <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                <button type="submit" name="btn-login">Login</button>
            </form>
        </div>
    </div>
    <div class="roket">
        <img src="Saly-43.png" alt="">
    </div>
</body>

</html>