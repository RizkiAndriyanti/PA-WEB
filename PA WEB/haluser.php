<?php
require 'koneksi.php';
session_start();

date_default_timezone_set("Asia/Makassar");

$query = "SELECT *FROM sepatu";
$result = $db->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMAN USER</title>
    <link rel="stylesheet" href="css/haladmin.css">
</head>
<body>
    <div class="kontainer">

        <!-- header -->
        
        <div class="header">
            <div class="logo">
                <img src="logo/logo.png" alt="" width="150">
            </div>
            <p id="nama_toko">MAUVE SHOES</p>
            <div class="pencarian">
                <form action="cariakun.php" method="post">
                    <input type="text" placeholder="Cari" required>
                </form>
            </div>
            <div class="navbar">
                <div class="tomlog">
                    <a href="login.php" > <button class="tombol"> LOG-IN</button></a>
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
        

        <!-- Tengah -->

        <div class="main">
            <div id="judul">
                <p>Mauve Collection</p>
            </div>
            <div class="gambar_sepatu">
                <?php
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){

                ?>
                <img src="sepatu/<?=$row['gambar_sepatu'];?>" width="150px">
                <?php
                    $i++;
                    }
                ?>
            </div>
            <div class="tmbl">
                <a href="pesanan-user.php"><button class="tombol-2">Buat Pesanan</button></a>
                <a href="keranjang.php"><button class="tombol-2">Cart</button></a>
            </div>
        
            <div class="about">
                <h1>ABOUT</h1>
                <p>Mauve Shoes mulai di perkenalkan pada tahun 2022 oleh usaha muda Rizki Andriyanti, Darniah dan Olivia Oktavi Utami di Samarinda, Kalimantan Timur. 

Mauve Shoes memiliki berbagai macam varian dan jenis yang cocok di gunakan untuk perempian dan berbagai jenis kegiatan. 

Setiap pasang Mauve Shoes melalu proses yang panjang dan detail, mulai dari pemilihan material, proses produksi hingga pemeriksaan kualitas yang sangat ketat. Hal ini dilakukan agar kualitas Mauve Shoes terjaga dengan baik.</p>
            </div>

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
        
    </div>
</body>
</html>