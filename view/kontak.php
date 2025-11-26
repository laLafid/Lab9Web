<?php 
require_once __DIR__ . '/../config/gajah.php';
if (!isset($_SESSION['login'])) {
    header('Location: ' . BASE_URL . 'module/auth/login.php');
    exit;
}
require ROOT . 'view/header.php'; ?>
<div class="content">
    <h2>Ini Halaman Kontak</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>
<?php require ROOT . 'view/footer.php'; ?>