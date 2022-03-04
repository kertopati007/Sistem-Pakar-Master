<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'cf_cabai';


    $konek= mysqli_connect($host,$user,$pass,$db_name);

    if (mysqli_connect_errno()) {
        # code...
        echo ' koneksi ke database gagal';
        
    }
?>