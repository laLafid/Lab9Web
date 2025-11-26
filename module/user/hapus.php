<?php
require_once __DIR__ . '/../../config/gajah.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    mysqli_query($conn, "DELETE FROM data_barang WHERE id_barang = '$id'");
}
header('Location: ../../../view/home.php');
exit;
?>