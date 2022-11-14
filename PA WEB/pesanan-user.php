<?php
    require 'koneksi.php';

    date_default_timezone_set("Asia/Makassar");

    $query = "SELECT * FROM sepatu";
    $result = $db->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMAN PESANAN</title>
    <link rel="stylesheet" href="css/pesanan-user.css">
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

    <h1 class="judul-tambahpesanan">TAMBAH BELANJAMU SEBANYAK MUNGKIN :)</h1>
    <form class="form-tambahpesanan" action="konekpesanan.php" method="post" enctype="multipart/form-data">
            <input class="form" type="text" placeholder="Nama Anda" name="nama_pemesan">
            <br>
            <input class="form" type="text" placeholder="Produk" name="pesanan_produk">
            <br>
            <input class="form" type="text" placeholder="Ukuran" name="ukuran_pesanan">
            <br>
            <input class="form" type="text" placeholder="Harga" name="harga_pesanan">
            <br>
            <input class="form" type="text" placeholder="Jumlah"  name="jumlah_pesanan">
            <br>
            <input class="form" type="text" placeholder="Alamat" name="alamat_pemesan" >
            <br>
            <input class="form" type="text" placeholder="Warna" name="warna_pesanan" >
            <br>
            <div class="tmbl-kirim">
                <input class="kirim" type="submit" value="Kirim" name="kirim">
            </div>
            
    </form>
    
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