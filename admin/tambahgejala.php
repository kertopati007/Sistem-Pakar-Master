<?php 

include '../koneksi.php';

$nama_gejala= $_POST['nama'];

$q = mysqli_query($konek, "insert into gejala (nama_gejala) values ('$nama_gejala')");

if($q){

    header("location:gejala.php");
}else
{
    echo"error " ;
}

?>