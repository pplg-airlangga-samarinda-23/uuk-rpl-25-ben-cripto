<?php
session_start();
if (!isset($_SESSION['Pendataan Balita'])) {
    header("Location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pendataan Balita - Posyandu Serumpun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Silahkan Cek Pendataan</h2>
        <div class="dashboard-links">
            <a href="manage.php" class="btn-dashboard">kelola pendataan</a>
            <a href="../logout.php" class="btn-logout">Logout</a>
        </div>
    </div>
</body>
</html>