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
    <title>Pendataan Balita</title>
    <link rel="sylesheet" href="style.css">
</head>
<body>
   <div class="container"> 
   <h1>Posyandu Serumpun</h1>
   <p>selamat datang di pendataan balita.<br>pilih opsi yang anda mau</p>
   <div class="buttons">
        <a href="user/index.php" class= "btn kader">masuk sebagai Kader</a>
        <a href="login.php" class= "btn admin">masuk sebagai Admin</a>
   </div>
   </div>   
</body>
</html>
