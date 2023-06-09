<?php
require 'koneksi.php';
 
$id = $_GET["ubahid_mapel"];
$query = tampil("SELECT * FROM mapel WHERE id ='$id'")[0];
//var_dump($query)

if(isset($_POST["ubah"])){
    if(ubahdatamapel($_POST, $id) >0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="mapel.php"</script>';
    }else{
        echo '<script>alert("Gagal mengubah")</script>';
    }
}


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ubah data mapel</title>
    </head>
    <body>
        <h1>ubah data mapel</h1>
        <form action="" method="post">
            <label for="nama_mapel"> nama_mapel : </label><br>
            <input type="nama_mapel" name="nama_mapel" nama_mapel="nama_mapel" id="nama_mapel" autocomplete="off" placeholder="Masukkan nama mapel ..."><br>
            <label for="id_pengajar"> id_pengajar : </label><br>
            <input type="id_pengajar" name= "id_pengajar" id_pengajar="id_pengajar" id="id_pengajar" autocomplete="off" placeholder="Masukkan idnya ..."><br>
            <button type="submit" name="ubah"> ubah Data</Button>
        </form>
        <a href="mapel.php">Kembali</a><br><br>
    </body>
    </html>