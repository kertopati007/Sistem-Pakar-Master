<?php 
    $page='index';
    include '../koneksi.php';
    include 'header.php';
?>
<div class="container-fluid">
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Penyakit</div>
                      <?php 
                        $qpenyakit=mysqli_query($konek,'Select count(*) as total from penyakit');
                        $totalpenyakit= mysqli_fetch_assoc($qpenyakit);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="penyakit.php" type="button" class="btn btn-danger" >Total : <?= $totalpenyakit["total"]; ?> </a></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bug fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Gejala</div>
                      <?php 
                        $qgejala = mysqli_query($konek, "select count(*) as total from gejala");
                        $totalgejala= mysqli_fetch_assoc($qgejala);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="gejala.php" type="button" class="btn btn-warning">Total : <?= $totalgejala["total"]; ?></a></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-heartbeat fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Riwayat</div>
                      <?php 
                        $qhasil = mysqli_query($konek, "select count(*) as total from hasil");
                        $totalhasil= mysqli_fetch_assoc($qhasil);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="riwayat.php" type="button" class="btn btn-info">Total :  <?= $totalhasil["total"]; ?></a></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-history fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Admin</div>
                      <?php 
                        $qadmin = mysqli_query($konek, "select count(*) as total from admin");
                        $totadmin= mysqli_fetch_assoc($qadmin);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="user.php" type="button" class="btn btn-success">Total : <?= $totadmin["total"]; ?> </a></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow mb-4 mt-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Selamat Datang Pada Halaman Admin</h6>
                </div>
                <div class="card-body">
                <p>
                 Selamat datang, berikut ini adalah halaman admin dimana memiliki fitur untuk menambah gejala, penyakit, dan basis pengetahuan untuk pakar. pada halaman admin ini dapat mengatur nilai-nilai MB (Measure of Belief) dan MD ( Measure of Disbelief) pada 
                perhitungan Certainty Factor. </p>
                
                </div>
            </div>
        </div>
</div>

<?php 
    include 'footer.php'
?>