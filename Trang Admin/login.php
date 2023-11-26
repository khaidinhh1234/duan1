<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/taikhoan.php";

    if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
       $vai_tro =  check_tk($user,$pass);
            $_SESSION['vai_tro'] = $vai_tro;

        header('location: index.php');

    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>Form đăng nhập</h1>
<form action="<?= $_SERVER['PHP_SELF'];  ?>" method="post">
    <input type="text" name="user">
    <input type="password" name="pass">
    <input type="submit" value="Đăng Nhập" name="dangnhap">

</form>
</body>
</html>
