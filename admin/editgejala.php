<?php 
    $kd=$_GET['kode_gejala'];
    $nm=$_GET['gejala'];
    include '../koneksi.php';

    $q= mysqli_query($konek,"Update gejala set nama_gejala='$nm' where kode_gejala='$kd'
     ");


     if ($q) {
         # code...
         header("location : gejala.php");
     }
     else{
         echo "error bang ";
     }
?>