<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMAN LOGIN</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- header  -->

    <div class="header">
        <div class="logo">
            <img src="logo/logo.png" alt="" width="150">
        </div>
        <p id="nama_toko">MAUVE SHOES</p>
        <div class="pencarian">
            <input type="text" placeholder="Cari" required>
        </div>
        <div class="navbar">
            <div class="tomlog">
                <a href="loginuser.php" > <button class="tombol"> LOG-IN</button></a>
                <a href="logout.php" > <button class="tombol"> LOG-OUT</button></a>
            </div>
        </div>
        <input class="mode" type="checkbox" onclick="ubahMode()">
        <script>
            function ubahMode(){
                const ubah = document.body;
                ubah.classList.toggle("dark");
            }
        </script>
    </div>

    <!-- tengah  -->

    <h1 class="judul-login">Silahkan Login yaaa!!</h1>
    <div class="form-login">
        <form action="" method="POST">
                <input class="form" type="text" placeholder="Username" name="username">
                <br>
                <input class="form" type="password" placeholder="Password" name="pw">
                <br>
                <div class="tmbl-kirim">
                    <input class="kirim" type="submit" value="LOG-IN" name="kirim">
                </div>
        </form>
    </div>
    <div class="tombolbuatakun">
        <a style="text-decoration:none" href="akunuser.php"><button class="button1">BUAT AKUN</button></a>
    </div>
    
    
    <!-- footer -->

    <div class="footer">
        <h1 class="kontak">Contact Info</h1>
        <div class="footer-2">
            <div class="alamat">
                <h2>Address</h2>
                <h3>JL. Perjuangan 7</h3>
            </div>
            <div class="email">
                <h2>Email</h2>
                <h3>mauveshoes@gmail.com</h3>
            </div>
            <div class="telp">
                <h2>Telpon</h2>
                <h3>+62 821 9188 1004</h3>
            </div>
            <div class="media-sosial">
                <h2>Instagram</h2>
                <div class="buat-ig">
                    <img src="logo/ig.png" alt="" width="50px">
                    <h3>MauveShoes</h3>
                </div>
            </div>
            
        </div>
        <div class="copyright">
            &copy; 2021. <b>MauveShoes.com</b> All Rights Reserved.
        </div>
    </div>

</body>
</html>


<?php
    session_start();
    require 'koneksi.php';
    if(isset($_POST['kirim'])){
        $user = $_POST['username'];
        $pw = $_POST['pw'];

        $pw = md5($pw);

        $query = "SELECT * FROM registrasi WHERE username = '$username' OR email = '$username' ";
        $result = $db->query($query);
        $row = mysqli_fetch_array($result);
        $user = $row['nama'];

        if($password == $row['pw']){

            $_SESSION['kirim'] = true;
            echo "
                <script>
                    alert('selamat datang $user');
                    document.location.href ='haluser.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('username dan pw salah');
                    document.location.href ='loginuser.php';
                </script>
            ";
        }
        
    }
?>