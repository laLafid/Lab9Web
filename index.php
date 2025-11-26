<?php 
session_start();
require_once __DIR__ . '/config/gajah.php';
require ROOT . 'view/header.php'; 
?>
<div class="content">
    <h1>Ini Halaman index</h1>
    <p>Ini adalah bagian content dari halaman.</p>
</div><?php
require ROOT . 'view/footer.php'; 
?>