<?php
session_start();
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/halindex.css">
</head>
<style>
    body{
        background-image: url("logo/bg.jpg");
    }
</style>
<body>
    <div class="mulai">
            <h1 class="log">Login</h1>
            <br>
            <a href="loginadmin.php"><button class="button">Admin</button></a>
            <br>
            <a href="loginuser.php"><button class="button">User</button></a>
        </form>
    </div>
</body>
</html>