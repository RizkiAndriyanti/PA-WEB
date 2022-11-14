<?php

#diperlukan jika sumber beberapa syntax berada di file lain
require 'koneksi.php';

#sambungan ke pesanan-user.php
if(isset($_POST['kirim'])){
    $nama = $_POST['nama_pemesan'];
    $produk = $_POST['pesanan_produk'];
    $ukuran = $_POST['ukuran_pesanan'];
    $harga = $_POST['harga_pesanan'];
    $jml = $_POST['jumlah_pesanan'];
    $alamat = $_POST['alamat_pemesan'];
    $warna = $_POST['warna_pesanan'];

    $kirim = mysqli_query($db, "INSERT INTO pesanan (nama_pemesan,pesanan_produk,ukuran_pesanan,harga_pesanan,jumlah_pesanan,alamat_pemesan,warna_pesanan) VALUES ('$nama','$produk','$ukuran','$harga','$jml','$alamat','$warna')");

    if($kirim){
        echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:keranjang.php");
    } else { # jika pengiriman gagal
        echo "Sending Fail!";
    }

    
}


?>