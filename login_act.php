<?php 

    session_start();

    include 'koneksi.php';

    $user=$_POST['username'];
    $passwd=$_POST['password'];
    $pass=md5($passwd);

    $q= mysqli_query($konek,"select * from admin where username='$user' and password='$pass' ") or die (mysqli_error($konek));

    $isi = mysqli_fetch_array($q);
    
        if(mysqli_num_rows($q)==1){
        $_SESSION['user']=$user;
        $_SESSION['nama']=$isi['nama_lengkap'];
        header("location:admin/index.php");
        // echo $_SESSION['nama'];
    }else{
        header("location:login.php?pesan=gagal")or die (mysqli_error($konek));
    }
?>