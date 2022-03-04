<?php
    include '../koneksi.php';
    $kd_gejala = $_GET['id'];


    $q= mysqli_query($konek,"delete from gejala where kode_gejala = '$kd_gejala'")

    ;if ($q) {
        header("location:gejala.php");
    }
    else{
        echo " error ";
    }
?>