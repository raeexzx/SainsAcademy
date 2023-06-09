<?php

$host = new mysqli("localhost","root","","bimbel");

function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'bimbel';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
		
    	exit('Failed to connect to database!');
    }
}

function tampil($query) {
    global $host;
    $result = mysqli_query($host, $query);
    $rows = [];


    while($data = mysqli_fetch_assoc($result)) {

        $rows[] = $data;
    }

    return $rows;
}

function tambahdata($data){
    global $host;
    $nama = $data ["nama_siswa"];
    $alamat = $data ["alamat_siswa"];
    $jenjang = $data ["jenjang_siswa"];
    $tanggal_lahir = $data ["tanggal_lahir_siswa"];
    $email = $data ["email_siswa"];
    $umur = $data ["umur_siswa"];
    $jenis_kelamin = $data ["jenis_kelamin_siswa"];
    $no_telepon = $data ["no_telepon_siswa"];
    $pass = $data ["pass"];

    mysqli_query($host, "INSERT INTO siswa VALUES ('','$nama_siswa','$alamat_siswa','$jenjang_siswa','$tanggal_lahir_siswa','$email_siswa','$umur_siswa','$jenis_kelamin_siswa','$no_telepon_siswa','$pass')");

    return mysqli_affected_rows($host);
}

function tambahdatapembayaran($data){
    global $host;
    $tanggal = $data ["tanggal_pembayaran"];
    $jumlah = $data ["jumlah_pembayaran"];
    $metode = $data ["metode_pembayaran"];

    mysqli_query($host, "INSERT INTO pembayaran VALUES ('','tanggal_pembayaran','jumlah_pembayaran','metode_pembayaran')");

    return mysqli_affected_rows($host);
}

function ubahdata($data, $id) {
    global $host;
    $nama = $data ["nama_siswa"];
    $alamat = $data ["alamat_siswa"];
    $jenjang = $data ["jenjang_siswa"];
    $tanggal_lahir = $data ["tanggal_lahir_siswa"];
    $email = $data ["email_siswa"];
    $umur = $data ["umur_siswa"];
    $jenis_kelamin = $data ["jenis_kelamin_siswa"];
    $no_telepon = $data ["no_telepon_siswa"];
    $idp = $data ["id_pengajar"];
    $pass = $data ["pass"];

    mysqli_query($host, " UPDATE siswa SET nama_siswa = '$nama', alamat_siswa = '$alamat', jenjang_siswa = '$jenjang', tanggal_lahir_siswa = '$tanggal_lahir', email_siswa = '$email', umur_siswa ='$umur', jenis_kelamin_siswa ='$jenis_kelamin', no_telepon_siswa ='$no_telepon', id_pengajar ='$idp', pass ='$pass' WHERE id = $id");

    return mysqli_affected_rows($host);
}

function ubahdatapembayaran($data, $id){
    global $host;
    $tanggal = $data ["tanggal_pembayaran"];
    $jumlah = $data ["jumlah_pembayaran"];
    $metode = $data ["metode_pembayaran"];
    $ids = $data ["id_siswa"];

    mysqli_query($host, "UPDATE pembayaran SET tanggal_pembayaran = '$tanggal', jumlah_pembayaran = '$jumlah', metode_pembayaran = '$metode', id_siswa = '$ids' WHERE id = $id");

    return mysqli_affected_rows($host);
}

function tambahdatamapel($data, $id){
    global $host;
    $nama = $data ["nama_mapel"];
    $idp = $data ["id_pengajar"];

    mysqli_query($host, "INSERT INTO mapel VALUES ('','nama_mapel','id_pengajar')");

    return mysqli_affected_rows($host);

}

function ubahdatamapel($data, $id){
    global $host;
    $nama = $data ["nama_mapel"];
    $idp = $data ["id_pengajar"];

    mysqli_query($host, "UPDATE mapel SET nama_mapel = '$nama', id_pengajar = '$idp' WHERE id = $id");
}


function tambahdatajadwal_les($data, $id){
    global $host;
    $hari = $data ["hari_jadwal_les"];
    $jam = $data ["jam_jadwal_les"];
    $idp = $data ["id_pengajar"];
    $idm = $data ["id_mapel"];
    $ids = $data ["id_siswa"];

    mysqli_query($host, "INSERT INTO jadwal_les VALUES ('','hari_jadwal_les','jam_jadwal_les','id_pengajar','id_mapel','id_siswa')");

    return mysqli_affected_rows($host);
} 


function ubahdatajadwal_les($data, $id){
    global $host;
    $hari = $data ["hari_jadwal_les"];
    $jam = $data ["jam_jadwal_les"];
    $idp = $data ["id_pengajar"];
    $idm = $data ["id_mapel"];
    $ids = $data ["id_siswa"];

    mysqli_query($host, "UPDATE jadwal_les SET hari_jadwal_les = '$hari', jam_jadwal_les = '$jam', id_pengajar = '$idp', id_mapel = '$idm', id_siswa = '$ids' WHERE id = $id");

}


function template_header($title) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8" />
            <title>$title</title>
            <link href="halaman.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        </head>
        <body>
        <nav class="navtop">
            <div>
                <h1>SainsAcademy</h1>
                <a href="halamanadmin.php"><i class="fas fa-home"></i>Home</a>
                <a href="siswa.php"><i class="fas fa-address-book"></i>siswa</a>
                <a href="pembayaran.php"><i class="fas fa-address-book"></i>pembayaran</a>
                <a href="pengajar.php"><i class="fas fa-address-book"></i>pengajar</a>
                <a href="mapel.php"><i class="fas fa-address-book"></i>mapel</a>
                <a href="jadwal_les.php"><i class="fas fa-address-book"></i>jadwal les</a>
            </div>
        </nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>