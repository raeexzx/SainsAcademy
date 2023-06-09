<?php
    include "koneksi.php";

    if (isset($_POST['tambah'])){
        mysqli_query($host,"insert into pembayaran set
        tanggal_pembayaran = '$_POST[tanggal_pembayaran]',
        jumlah_pembayaran = '$_POST[jumlah_pembayaran]',
        metode_pembayaran = '$_POST[metode_pembayaran]',
        id_siswa = '$_POST[id_siswa]'");

    
        echo "Data pengguna telah tersimpan";
    }


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah data pembayaran</title>
    </head>
    <body>
        <h1>Tambah data pembayaran</h1>
        <form action="" method="post">
            <label for="tanggal_pembayaran"> tanggal_pembayaran : </label><br>
            <input type="date" name="tanggal_pembayaran" tanggal_pembayaran="tanggal_pembayaran" id="tanggal_pembayaran" autocomplete="off" placeholder="Masukkan tanggal pembayaran ..."><br>
            <label for="jumlah_pembayaran"> jumlah_pembayaran : </label><br>
            <input type="jumlah_pembayaran" name= "jumlah_pembayaran" jumlah_pembayaran="jumlah_pembayaran" id="jumlah_pembayaran" autocomplete="off" placeholder="Masukkan jumlahnya ..."><br>
            <label for="metode_pembayaran"> metode_pembayaran : </label><br>
            <select name="metode_pembayaran">
                <option
                value="bank">bank</option>
                <option 
                value="kredit">kredit</option>
                <option
                value="tunai">tunai</option>
            </select> <br>
            <label for="id_siswa"> id_siswa : </label><br>
            <input type="id_siswa" name= "id_siswa" id_siswa="id_siswa" id="id_siswa" autocomplete="off" placeholder="Masukkan idnya ..."><br>
            <button type="submit" name="tambah"> Tambah Data</Button>
        </form>
        <a href="pembayaran.php">Kembali</a><br><br>
    </body>
    </html>