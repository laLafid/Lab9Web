<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contoh Modularisasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASE_URL ?>asset/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <header>
            <h1>Modularisasi Menggunakan Require</h1>
        </header>
        <nav>
            <a href="<?= BASE_URL ?>view/home.php">Home</a>
            <a href="<?= BASE_URL ?>view/about.php">Tentang</a>
            <a href="<?= BASE_URL ?>view/kontak.php">Kontak</a>
        </nav>
        <?php if (isset($_SESSION['login'])) {?>
            <div class="greeting">
                <span style="color:#667eea; font-weight:600;">Hai, <?= $_SESSION['nama'] ?>!</span><br>
                <a href="<?= BASE_URL ?>module/auth/logout.php" class="btn btn-danger">Logout</a>
            </div>
        <?php } ?>