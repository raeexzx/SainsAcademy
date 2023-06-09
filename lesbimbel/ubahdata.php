<?php
require 'koneksi.php';
 
$id = $_GET["ubahid_siswa"];
$query = tampil("SELECT * FROM siswa WHERE id ='$id'")[0];
//var_dump($query)

if(isset($_POST["ubah"])){
    if(ubahdata($_POST, $id) >0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="siswa.php"</script>';
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
    <title>ubah data siswa</title>
</head>
<body>
    <h1>ubah data siswa</h1>
    <form action="" method="post">
        <label for="nama_siswa"> nama_siswa : </label><br>
        <input type="nama_siswa" name="nama_siswa" nama_siswa="nama_siswa" id="nama_siswa" autocomplete="off" placeholder="Masukkan nama ..."><br>
        <label for="alamat_siswa"> alamat_siswa : </label><br>
        <input type="alamat_siswa" name= "alamat_siswa" alamat_siswa="alamat_siswa" id="alamat_siswa" autocomplete="off" placeholder="Masukkan alamat ..."><br>
        <label for="jenjang_siswa"> jenjang_siswa : </label><br>
        <select name="jenjang_siswa">
            <option
            value="SMA">SMA</option>
            <option 
            value="SMK">SMK</option>
            <option
            value="SMP">SMP</option>
        </select> <br>
        <label for="tanggal_lahir_siswa"> tanggal_lahir_siswa : </label><br>
        <input type= "date" name= "tanggal_lahir_siswa" tanggal_lahir_siswa="tanggal_lahir_siswa" id="tanggal_lahir_siswa" autocomplete="off" placeholder="Masukkan tanggal lahir ..."><br>
        <label for="email_siswa"> email_siswa :</label><br>
        <input type="email_siswa" name= "email_siswa" email_siswa="email_siswa" id="email_siswa" autocomplete="off" placeholder="Masukkan email ..."><br>
        <label for="umur_siswa">umur_siswa : </label><br>
        <input type="umur_siswa" name= "umur_siswa" umur_siswa="umur_siswa" id="umur_siswa" autocomplete="off" placeholder="Masukkan umur..."><br>
        <label for="jenis_kelamin_siswa">jenis_kelamin_siswa : </label><br>
        <select name="jenis_kelamin_siswa">
            <option
            value="laki-laki">laki_laki</option>
            <option 
            value="perempuan">perempuan</option>
        </select> <br>
        <label for="no_telepon_siswa">no_telepon_siswa : </label><br>
        <input type="no_telepon_siswa" name= "no_telepon_siswa" no_telepon_siswa="no_telepon_siswa" id="no_telepon_siswa" autocomplete="off" placeholder="Masukkan no telepon ..."><br>
        <label for="id_pengajar">id_pengajar : </label><br>
        <input type="id_pengajar" name= "id_pengajar" id_pengajar="id_pengajar" id="id_pengajar" autocomplete="off" placeholder="Masukkan id ..."><br>
        <label for="pass">pass : </label><br>
        <input type="pass" name= "pass" pass="pass" id="pass" autocomplete="off" placeholder="Masukkan PASSWORD ..."><br>
        <button type="submit" name="ubah"> ubah data Data</Button>
    </form>
    <a href="siswa.php">Kembali</a><br><br>
</body>
</html>