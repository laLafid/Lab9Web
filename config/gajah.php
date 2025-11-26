<?php

define('ROOT', __DIR__ . '/../');                   
define('CONFIG', ROOT . 'config/');
define('VIEW', ROOT . 'view/');
define('ASSET', ROOT . 'asset/');
define('GAMBAR', ROOT . 'gambar/');
define('MODULE', ROOT . 'module/auth/user/');

define('BASE_URL', 'http://localhost/webpro9/');         

require_once CONFIG . 'koneksi.php';

$load_data_barang = false;

if (isset($load_data_barang_from_include)) {
    $load_data_barang = $load_data_barang_from_include;
}

$result = null;

if ($load_data_barang) {
    $sql = 'SELECT * FROM data_barang ORDER BY id_barang DESC';
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Query gagal: ' . mysqli_error($conn));
    }
}
?>