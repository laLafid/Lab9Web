<?php

define('ROOT', __DIR__ . '/../');                   
define('CONFIG', ROOT . 'config/');

define('GAMBAR', ROOT . 'gambar/');


define('BASE_URL', 'http://localhost/webpro9/');         // ganti kalo error

require_once CONFIG . 'koneksi.php';

$loda = false;

if (isset($loda_aja)) {
    $loda = $loda_aja;
}

$result = null;

if ($loda) {
    $sql = 'SELECT * FROM data_barang ORDER BY id_barang DESC';
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Query gagal: ' . mysqli_error($conn));
    }
}
?>