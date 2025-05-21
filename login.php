<?php
session_start();
if (isset($_SESSION['Pendataan Balita'])) {
    header("Location: Pendataan Balita/dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Balita - Posyandu Serumpun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>login Admin</h2>
        <form action="proses.php" method="POST" class="login-form">
            <input type="hidden" name="role" value="admin">
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit" name="login" class="btn-login">Login</button>
            <a href="index.php" class="btn-back">Kembali</a>
        </form>
    </div>
</body>
</html>