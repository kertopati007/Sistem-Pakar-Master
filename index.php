<?php 
 include 'header.php';
 $page='';
?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">SELAMAT DATANG</h1>
            <p class="lead">Selamat Datang pada aplikasi Sistem Pakar Diagnosa Penyakit pada Cabai Keriting</p>
            <p>Aplikasi ini merupakan penerapan dari metode certainty factor dalam mendiagnosa penyakit-penyakit pada cabai keriting dengan menggunakan bantuan para Pakar yang telah memberikan nilai terhadap gejala-gejala yang kemungkinan menimbulkan penyakit pada tanaman cabai keriting.</p>
            <hr class="my-4">
            <p>Tombol dibawah ini merupakan Contoh perhitungan</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="perhitungan.php?act=1" role="button">Coba Sekarang !</a>
            </p>
        </div>
    </div>
    </div>
</div>
<?php 
    include 'footer.php';
?>