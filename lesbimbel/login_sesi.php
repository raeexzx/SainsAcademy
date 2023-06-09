<?php
include "koneksi.php";
session_start();

if (isset($_POST['btn-login'])) {
    $nama = $_POST['nama_siswa'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM siswa where nama_siswa = '$nama' and pass = '$pass' ";
    $result = mysqli_query($host, $sql);
    $return = mysqli_fetch_array($result);

    if ($return) {
        $_SESSION['id'] = $_POST['id'];
        $_SESSION['nama_siswa'] = $_POST['nama_siswa'];
        $_SESSION['pass'] = $_POST['pass'];

        echo "<script>alert('Selamat datang $nama');
                document.location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Username tidak teradaftar');
            document.location.href = 'login.php'</script>";
    }

}


?>