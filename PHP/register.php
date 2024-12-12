<?php
include "service/database.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if($db->query($sql)) {
        echo "Data Masuk";
    } else {
        echo "Data Gagal Masuk";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/Header.html"?>
    <h3>Daftar Akun</h3>
    <form action="register.php" method="POST">
    <form>
        <input type="text" placeholder="username" name="username" />
        <input type="text" placeholder="password" name="password" />
        <button type="submit" name="register">Daftar sekarang</button> 
    </form>
    <?php include "layout/Footer.html"?>
</body>
</html>