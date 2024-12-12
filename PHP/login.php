<?php
include "service/database.php";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'
     ";
     $result = $db->query($sql);

     if($result->num_rows >0) {
        echo "Datanya Ada";
     }else {
        echo "Akun tidak ditemukan";
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
    <h3>Masuk Akun</h3>
    <form action="login.php" method="POST">
    <form>
        <input type="text" placeholder="username" name="username" />
        <input type="text" placeholder="password" name="password" />
        <button type="submit" name="login">Masuk sekarang</button> 
    </form>
    <?php include "layout/Footer.html"?>
</body>
</html>