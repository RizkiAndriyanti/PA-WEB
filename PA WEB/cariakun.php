<?php
require 'koneksi.php';

if(isset($_POST['cari'])){
    $query = mysqli_query($db, "SELECT * FROM registrasi WHERE nama LIKE '%".
    $_POST['cari']. "%'");

    echo "
        <script>
            alert('Data Ada');
            document.location.href ='sepatu.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data Tidak Ada');
        </script>
    ";
}

?>