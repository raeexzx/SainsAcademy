<?php
include 'koneksi.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql(); 
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;


// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM jadwal_les ORDER BY id DESC LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$jadwal_les = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
$num_contacts = $pdo->query('SELECT COUNT(*) FROM jadwal_les')->fetchColumn();
?>


<?=template_header('Read')?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jadwal_les</title>
</head>
<body>
<div class="content read">
    <h1> Tabel jadwal les</h1>
    <a href="tambahdatajadwal_les.php">Tambah Data</a><br><br>
    <table border="3" cellspacing="0" cellpading="3">
        <tr>
            <th>No</th>
            <th>hari</th>
            <th>jam</th>
            <th>edit</th>
        </tr>
    <?php $no = 1; ?>
    <?php foreach($jadwal_les as $jdls) : 
        $id = $jdls ["id"];
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $jdls["hari_jadwal_les"];?></td>
            <td><?= $jdls["jam_jadwal_les"];?></td>
            
            <td><a href="#`">Hapus</a> |
                <a href="ubahdatajadwal_les.php?ubahid_jadwal_les=<?= $id?>">ubah</a> 
            </td>
        </tr>
        <?php endforeach;?>
</table>
<div class="pagination">
	<?php if ($page > 1): ?>
	<a href="jadwal_les.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
	<?php endif; ?>
	<?php if ($page*$records_per_page < $num_contacts): ?>
	<a href="jadwal_les.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
	<?php endif; ?>
</div>
    </body>
</html>

<?=template_footer()?>