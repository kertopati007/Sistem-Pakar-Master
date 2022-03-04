<?php
    include '../koneksi.php';
    $kd_pengetahuan = $_GET['id'];


    $q= mysqli_query($konek, "delete from basis_pengetahuan where kode_pengetahuan = '$kd_pengetahuan'")

    ;if ($q) {
        header("location:basispengetahuan.php");
    }
    else{
        echo " error ";
    }
?>