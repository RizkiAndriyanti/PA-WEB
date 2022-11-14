<?php
require 'koneksi.php';

if(isset($_POST['carisepatu'])){
    $query = mysqli_query($db, "SELECT * FROM sepatu WHERE nama_sepatu LIKE '%".
    $_POST['carisepatu']. "%'");

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
            document.location.href ='sepatu.php';
        </script>
    ";
}

?>