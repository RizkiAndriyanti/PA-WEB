<?php 
    require 'koneksi.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM sepatu WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama_sepatu'];
        $ukuran = $_POST['ukuran_sepatu'];
        $harga = $_POST['harga_sepatu'];
        $stok = $_POST['jml_stok'];
        $warna = $_POST['warna_sepatu'];

        $update = mysqli_query($db, "UPDATE sepatu SET nama_sepatu='$nama',ukuran_sepatu='$ukuran',harga_sepatu='$harga',jml_stok='$stok',warna_sepatu='$warna' WHERE id='$id'");

        if($update){
            header("Location:sepatu.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMAN EDIT SEPATU</title>
    <link rel="stylesheet" href="css/tambahsepatu.css">
</head>
<body>
    <!-- header -->

    <div class="header">
        <div class="logo">
            <img src="logo/logo.png" alt="" width="150">
        </div>
        <p id="nama_toko">MAUVE SHOES</p>
        <div class="pencarian">
            <form action="carisepatu.php" method="post">
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

    <!-- tengah -->

    <h1 class="judul-tambahsepatu">EDIT DATA SEPATU</h1>
    <form class="form-tambahsepatu" action="" method="post" enctype="multipart/form-data">
            <input class="form" type="text" placeholder="Nama Sepatu" name="nama_sepatu">
            <br>
            <input class="form" type="text" placeholder="Ukuran" name="ukuran_sepatu">
            <br>
            <input class="form" type="text" placeholder="Harga" name="harga_sepatu">
            <br>
            <input class="form" type="text" placeholder="Jumlah Stok"  name="jml_stok">
            <br>
            <input class="form" type="text" placeholder="Warna" name="warna_sepatu" >
            <br>
            <input class="form" type="file" name="gambar_sepatu">
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