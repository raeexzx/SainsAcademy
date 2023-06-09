<?php

include 'koneksi.php';
if (isset($_GET['deleteid_pembayaran'])) {   
    $id = $_GET['deleteid_pembayaran'];
    $sql = "DELETE FROM `pembayaran` where id= $id";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header('location:pembayaran.php');
    } else {
        die(mysqli_error($host));
    }
}

?>