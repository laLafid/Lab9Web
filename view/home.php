<?php
session_start();
$loda_aja = true;
require_once __DIR__ . '/../config/gajah.php';
if (!isset($_SESSION['login'])) {
    header('Location: ' . BASE_URL . 'module/auth/login.php');
    exit;
}
require ROOT . 'view/header.php';
?>
<div class="container">
    <h1>Data Barang</h1>
    <a href="<?= BASE_URL ?>module/user/tambah.php" class="btn btn-primary">+ Tambah Barang</a><br><br>
    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php if ($result && mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><img src="<?= BASE_URL ?>gambar/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>" width="80"></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td><?= $row['harga_jual']; ?></td>
                    <td><?= $row['harga_beli']; ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>module/user/ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a> |
                        <a href="<?= BASE_URL ?>module/user/hapus.php?id=<?= $row['id_barang']; ?>"
                            onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
        <?php endif; ?>
    </table>
</div>
<?php require ROOT . 'view/footer.php'; ?>