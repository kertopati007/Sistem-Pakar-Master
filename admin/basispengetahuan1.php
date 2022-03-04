<?php 
$page='basispengetahuan';
include 'header.php';
include '../koneksi.php';
?>

<div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h4 mb-0 text-gray-800">BASIS PENGETAHUAN</h3>
        </div>
    <div class="row">
    <div class="col-xl-12 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">BASIS PENGETAHUAN</h6>
            </div>
            <div class="card-body">
            <button data-toggle="modal" data-target="#Tambah" class="btn btn-primary mb-4">Tambah Data</button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Penyakit</th>
                      <th>Gejala</th>
                      <th>MB</th>
                      <th>MD</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                <?php 
                $hasil = mysqli_query($conn,"SELECT * FROM basis_pengetahuan b,kerusakan p where b.kode_kerusakan=p.kode_kerusakan AND p.nama_kerusakan like '%$_POST[keyword]%'");
                $no = 1;

                
                ?>
                  <tbody>
                    <tr>
                     
                    </tr>
                  </tbody>
                <div class="modal fade" id="myModal<?= $row['kode_penyakit'] ?>" role="dialog" >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Penyakit</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form action="editpenyakit.php" method="GET" role="form">
                            <input type="hidden" value="<?= $row['kode_penyakit'] ?>" name="kode_penyakit">
                            <div class="form-group">
                              <label> Nama Gejala </label>
                              <input type="text" class="form-control" name="user" value="<?= $row['nama_penyakit'] ?>" required>
                            </div>
                            <div class="form-group">
                              <label> Saran </label>
                              <input type="text" class="form-control" name="user" value="<?= $row['saran'] ?>" required>
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-warning" type="submit"> Update </button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>                  
              
                </table>
                
            </div>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="modal fade" id="Tambah" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Tambah Penyakit</h4>
        <button type="button" class="close" data-dismiss="modal"> &times;</button>
      </div>
      <div class="modal-body">
        <form action="tambahpenyakit.php" method="POST" role="form">
          <div class="form-group">
            <label> Nama Penyakit </label>
            <input class="form-control" type="text" name="penyakit" required >
          </div>
          <div class="form-group">
            <label> Saran </label>
            <input class="form-control" type="text" name="saran" required >
          </div>
         
          <div class="modal-footer">
            <button class="btn btn-success" type="submit"> Tambah </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
          </div>
        </form>
      </div>
    </div>
    </div>
  </div>
<?php include 'footer.php'?>