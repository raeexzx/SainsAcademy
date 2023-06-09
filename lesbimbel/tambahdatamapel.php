<?php
    include "koneksi.php";

    if (isset($_POST['tambah'])){
        mysqli_query($host,"insert into mapel set
        nama_mapel = '$_POST[nama_mapel]',
        id_pengajar = '$_POST[id_pengajar]'");
        
    
        echo "Data pengguna telah tersimpan";
    }


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah data mapel</title>
    </head>
    <body>
        <h1>Tambah data mapel</h1>
        <form action="" method="post">
            <label for="nama_mapel"> nama_mapel : </label><br>
            <input type="nama_mapel" name="nama_mapel" nama_mapel="nama_mapel" id="nama_mapel" autocomplete="off" placeholder="Masukkan nama mapel ..."><br>
            <label for="id_pengajar"> id_pengajar : </label><br>
            <input type="id_pengajar" name= "id_pengajar" id_pengajar="id_pengajar" id="id_pengajar" autocomplete="off" placeholder="Masukkan idnya ..."><br>
            <button type="submit" name="tambah"> Tambah Data</Button>
        </form>
        <a href="mapel.php">Kembali</a><br><br>
    </body>
    </html>
