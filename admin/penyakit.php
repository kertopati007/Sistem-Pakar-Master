<?php 
$page='penyakit';
include 'header.php';
include '../koneksi.php';
?>

<div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h4 mb-0 text-gray-800">DAFTAR PENYAKIT</h3>
        </div>
    <div class="row">
    <div class="col-xl-12 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">DAFTAR PENYAKIT</h6>
            </div>
            <div class="card-body">
            <button data-toggle="modal" data-target="#Tambah" class="btn btn-primary mb-4">Tambah Data</button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Penyakit</th>
                      <th>Saran</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php 
                   $res= mysqli_query($konek,"Select * from penyakit order by kode_penyakit asc");
                   $data= [];
                   while ($isi = mysqli_fetch_array($res)){
                     $data[]=$isi;
                     
                   }
                   $id=1;
                   foreach($data as $row):
                  ?>
                  <tbody>
                    <tr>
                      <td><?= $id ?></td>
                      <td><?= $row['nama_penyakit'] ?></td>
                      <td><?= $row['saran'] ?></td>
                      <td><?= "<a class='btn btn-success' id='custId' href='#' data-toggle='modal' data-target='#myModal". $row['kode_penyakit']. "'>Edit</a>&nbsp; "?>
                            <a class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus <?= $row['nama_penyakit']; ?> ??');" href="deletepenyakit.php?id=<?= $row['kode_penyakit']; ?>">Delete</a></td>
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
                              <input type="text" class="form-control" name="nama" value="<?= $row['nama_penyakit'] ?>" required>
                            </div>
                            <div class="form-group">
                              <label> Saran </label>
                              <input type="text" class="form-control" name="saran" value="<?= $row['saran'] ?>" required>
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
                  <?php
                    $id++;
                endforeach; ?>
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
            <input class="form-control" type="text" name="nama" required >
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