<html>
    <head>
        <h1>Tentang lesbimbel</h1>
    </head>

    <body>
        <h3>data mapel</h3>
        <table border="5" class="table">
            <tr>
                <th>no</th>
                <th>id</th>
                <th>nama_mapel</th>
                <th>id_pengajar</th>
            </tr>
        <?php
              include "koneksi.php";
              $query_mysql = mysqli_query($host,"SELECT * FROM mapel");
              $nomor = 1;
              while($data = mysqli_fetch_array($query_mysql)){
            ?>
              
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nama_mapel']; ?></td>
                <td><?php echo $data['id_pengajar']; ?></td>
            </tr>
            <?php } ?>
    </table>
        <h3>data jadwal les</h3>
        <table border="1" class="table">
            <tr>
                <th>no</th>
                <th>id</th>
                <th>hari_jadwal_les</th>
                <th>jam_jadwal_les</th>
                <th>id_mapel</th>
                <th>id_siswa</th>
                <th>id_pengajar</th>
            </tr>
            <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($host,"SELECT * FROM jadwal_les");
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['id_jadwal_les'];?></td>
        <td><?php echo $data['hari_jadwal_les'];?></td>
        <td><?php echo $data['jam_jadwal_les'];?></td>
        <td><?php echo $data['id_mapel'];?></td>
        <td><?php echo $data['id_siswa'];?></td>
        <td><?php echo $data['id_pengajar'];?></td>
    </tr> 
    <?php } ?>
        </table>
        <h3>data pembayaran</h3>
        <table border="1" class="table">
            <tr>
                <th>no</th>
                <th>id</th>
                <th>tanggal_pembayaran</th>
                <th>jumlah_pembayaran</th>
                <th>metode_pembayaran</th>
                <th>id_siswa</th>
            </tr>
            <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($host,"SELECT * FROM pembayaran");
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
       <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['tanggal_pembayaran'];?></td>
            <td><?php echo $data['jumlah_pembayaran'];?></td>
            <td><?php echo $data['metode_pembayaran'];?></td>
            <td><?php echo $data['id_siswa'];?></td>
     </tr>
    <?php } ?>
        </table>
        <h3>pengajar</h3>
        <table border="1" class="table">
            <tr>
                <th>no</th>
                <th>id</th>
                <th>nama_pengajar</th>
                <th>alamat_pengajar</th>
                <th>no_telepon_pengajar</th>
            </tr>
            <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($host,"SELECT * FROM pengajar");
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['nama_pengajar'];?></td>
            <td><?php echo $data['alamat_pengajar'];?></td>
            <td><?php echo $data['no_telepon_pengajar'];?></td>
        </tr>
    <?php } ?>
        </table>
        <h3>siswa</h3>
        <table border="1" class="table">
            <tr>
                <th>no</th>
                <th>id</th>
                <th>nama_siswa</th>
                <th>alamat_siswa</th>
                <th>jenjang_siswa</th>
                <th>tanggal_lahir_siswa</th>
                <th>email_siswa</th>
                <th>umur_siswa</th>
                <th>jenis_kelamin_siswa</th>
                <th>no_telepon_siswa</th>
                <th>id_pengajar</th>
                <th>PASSWORD</th>
            </tr>
            <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($host,"SELECT * FROM siswa");
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['nama_siswa'];?></td>
            <td><?php echo $data['alamat_siswa'];?></td>
            <td><?php echo $data['jenjang_siswa'];?></td>
            <td><?php echo $data['tanggal_lahir_siswa'];?></td>
            <td><?php echo $data['email_siswa'];?></td>
            <td><?php echo $data['umur_siswa'];?></td>
            <td><?php echo $data['jenis_kelamin_siswa'];?></td>
            <td><?php echo $data['no_telepon_siswa'];?></td>
            <td><?php echo $data['id_pengajar'];?></td>
            <td><?php echo $data['PASSWORD'];?></td>
        </tr>
    <?php } ?>
    </body>
</html>