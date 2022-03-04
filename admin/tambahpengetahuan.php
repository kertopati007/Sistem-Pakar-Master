<?php 
include "../koneksi.php";
$kd_penyakit= $_POST['kode_penyakit'];
$kd_gejala  = $_POST['kode_gejala'];
$mb         = $_POST['mb'];
$md         = $_POST['md'];


$q= mysqli_query($konek,"insert into basis_pengetahuan (kode_penyakit,kode_gejala,mb,md)
 values ('$kd_penyakit','$kd_gejala','$mb','$md')");

if($q){
    header("location:basispengetahuan.php");
}else{
    echo("Error");
}



?>