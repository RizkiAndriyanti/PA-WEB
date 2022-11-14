<?php

#diperlukan jika sumber beberapa syntax berada di file lain
require 'koneksi.php';

#sambungan ke tambahsepatu.php
if(isset($_POST['kirim'])){
    $nama = $_POST['nama_sepatu'];
    $ukuran = $_POST['ukuran_sepatu'];
    $harga = $_POST['harga_sepatu'];
    $stok = $_POST['jml_stok'];
    $warna = $_POST['warna_sepatu'];

    $gambar = $_FILES['gambar_sepatu']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $newgambar = "$nama.$ekstensi";
    $tmp = $_FILES['gambar_sepatu']['tmp_name'];

    if (move_uploaded_file($tmp, 'sepatu/'.$newgambar)){
        $query = "INSERT INTO sepatu (nama_sepatu,ukuran_sepatu,harga_sepatu,jml_stok,warna_sepatu,gambar_sepatu) VALUES ('$nama','$ukuran','$harga','$stok','$warna','$newgambar')";
        $result = $db->query($query);

        #jika pengiriman berhasil
        if($result){
            echo "<script> alert('Data Berhasil Dikirim');</script>";
            header("Location:sepatu.php");
        } else { # jika pengiriman gagal
            echo "Sending Fail!";
        }
    }

    
}


?>