<?php
    include '../koneksi.php';
    $kd_penyakit = $_GET['id'];


    $q= mysqli_query($konek,"delete from penyakit where kode_penyakit = '$kd_penyakit'")

    ;if ($q) {
        header("location:penyakit.php");
    }
    else{
        echo " error ";
    }
?>