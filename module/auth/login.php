<?php
session_start();
require_once __DIR__ . '/../../config/gajah.php';

$peng = [
    "rina@gmail.com" => ["id" => 1, "nama" => "Rina Wulandari", "password" => "rina567", "role" => "User"],
    "agus@gmail.com" => ["id" => 2, "nama" => "Agus Pranoto", "password" => "agus567", "role" => "User"],
    "cell@gmail.com" => ["id" => 3, "nama" => "Celine Marlina", "password" => "cell567", "role" => "Admin"]
];
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (array_key_exists($email, $peng)) {
        $user = $peng[$email];

        if ($user['password'] === $password) { 
            
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['role'] = $user['role'];

            header('Location: ' . BASE_URL . 'view/home.php'); 
            exit();
        }
    }
    
    $error_message = "Email atau password salah. Cek akun hardcoded di bawah.";
}

require ROOT . 'view/header.php';
?>

<div class="container">
    <h2>Login Dulu</h2>
    
    <?php if ($error_message): ?>
        <div class="error">
            <?= $error_message ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="input">
            <label for="username">Email</label>
            <input type="text" id="username" name="username" required value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>">
        </div>
        <div class="input">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="submit">
            <input type="submit" value="Login">
        </div>
        <p>
            Akun untuk Coba:<br>
            - Admin: <strong>cell@gmail.com</strong> / <strong>cell567</strong><br>
            - User: <strong>rina@gmail.com</strong> / <strong>rina567</strong>
        </p>
    </form>
</div>

<?php
require ROOT . 'view/footer.php';
?>