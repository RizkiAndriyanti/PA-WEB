<?php 

require 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM sepatu WHERE id='$id'");

    if($hapus){
        header("Location:sepatu.php");
    }
}