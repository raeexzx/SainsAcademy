<?php
include 'koneksi.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql(); 
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;


// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM pembayaran ORDER BY id DESC LIMIT :current_page, :records_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':records_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$pembayaran = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
$num_pembayaran = $pdo->query('SELECT COUNT(*) FROM pembayaran')->fetchColumn();
?>


<?=template_header('Read')?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembayaran</title>
</head>
<body>
<div class="content read">
    <h1> Tabel pembayaran</h1>
    <a href="tambahdatapembayaran.php">Tambah Data</a><br><br>
    <table border="3" cellspacing="0" cellpadding="3">
        <tr>
            <th>No</th>
            <th>tanggal</th>
            <th>jumlah</th>
            <th>metode</th>
            <th>edit</th>
        </tr>
    <?php $no = 1; ?>
    <?php foreach($pembayaran as $pbr) :
        $id = $pbr ["id"];
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $pbr["tanggal_pembayaran"];?></td>
            <td><?= $pbr["jumlah_pembayaran"];?></td>
            <td><?= $pbr["metode_pembayaran"];?></td>
            
            <td><a href="hapusdatapembayaran.php?deleteid_pembayaran=<?=$id?>">Hapus</a> |
                <a href="ubahdatapembayaran.php?ubahid_pembayaran=<?= $id?>">Ubah</a>
            </td>
        </tr>
    <?php endforeach;?>
    </table>
    <div class="pagination">
	<?php if ($page > 1): ?>
	<a href="pembayaran.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
	<?php endif; ?>
	<?php if ($page*$records_per_page < $num_pembayaran): ?>
	<a href="pembayaran.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
	<?php endif; ?>
    </div>
</div>
</body>
</html>

<?=template_footer()?>