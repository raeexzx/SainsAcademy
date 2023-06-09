<?php
require 'koneksi.php';
 
$id = $_GET["ubahid_jadwal_les"];
$query = tampil("SELECT * FROM jadwal_les WHERE id ='$id'")[0];
//var_dump($query)

if(isset($_POST["ubah"])){
    if(ubahdatajadwal_les($_POST, $id) >0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="jadwal_les.php"</script>';
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
    <title>ubah data jadwal_les</title>
</head>
<body>
    <h1>ubah data jadwal_les</h1>
    <form action="" method="post">
        <label for="hari_jadwal_les"> hari_jadwal_les : </label><br>
        <input type="hari_jadwal_les" name="hari_jadwal_les" hari_jadwal_les="hari_jadwal_les" id="hari_jadwal_les" autocomplete="off" placeholder="Masukkan harinya ..."><br>
        <label for="jam_jadwal_les"> jam_jadwal_les : </label><br>
        <input type="time" name= "jam_jadwal_les" jam_jadwal_les="jam_jadwal_les" id="jam_jadwal_les" autocomplete="off" placeholder="Masukkan jam ..."><br>
        <label for="id_pengajar"> id_pengajar : </label><br>
        <input type="id_pengajar" name= "id_pengajar" id_pengajar="id_pengajar" id="id_pengajar" autocomplete="off" placeholder="Masukkan id ..."><br>
        <label for="id_mapel"> id_mapel : </label><br>
        <input type="id_mapel" name= "id_mapel" id_mapel="id_mapel" id="id_mapel" autocomplete="off" placeholder="Masukkan id ..."><br>
        <label for="id_siswa"> id_siswa : </label><br>
        <input type="id_siswa" name= "id_siswa" id_siswa="id_siswa" id="id_siswa" autocomplete="off" placeholder="Masukkan idnya ..."><br>
        <button type="submit" name="ubah"> ubah Data</Button>
    </form>
    <a href="jadwal_les.php">Kembali</a><br><br>
</body>
</html>
