<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false) {
    log(1, "Koneksi ke server gagal: " . mysqli_connect_error());
    die();
}# else ("info", "Koneksi ke server berhasil.");

?>