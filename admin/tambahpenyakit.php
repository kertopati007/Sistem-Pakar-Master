<?php 

include '../koneksi.php';
$kd_penyakit = $_POST['kd_penyakit'];
$nama_penyakit= $_POST['nama'];
$saran  =   $_POST['saran'];


$q = mysqli_query($konek,"insert into penyakit (nama_penyakit,saran) values ('$nama_penyakit','$saran')");

if ($q) {
    # code...
    header("location : penyakit.php");
}else{
    echo ('error');
}
?>