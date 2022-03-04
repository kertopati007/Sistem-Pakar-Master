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
				  <tbody>
                <?php 
                $hasil = mysqli_query($konek,"SELECT * FROM basis_pengetahuan b,penyakit p where b.kode_penyakit=p.kode_penyakit");
                $no = 1;
				// $counter = 1;
                while ($r=mysqli_fetch_array($hasil)){
					// if ($counter % 2 == 0) $warna = "dark";
					// else $warna = "light";
					$sql = mysqli_query($konek,"SELECT * FROM gejala where kode_gejala = '$r[kode_gejala]'");
					$rgejala=mysqli_fetch_array($sql);
					   echo "<tr>
							 <td align=center>$no</td>
							 <td>$r[nama_penyakit]</td>
							 <td>$rgejala[nama_gejala]</td>
							 <td align=center>$r[mb]</td>
							 <td align=center>$r[md]</td>
							 <td> <a class='btn btn-success' id='custId' href='#' data-toggle='modal' data-target='#myModal$r[kode_pengetahuan]'> Edit</a>
               <a class='btn btn-danger' onclick='yourConfirm($r[kode_pengetahuan]);' href=''>Delete</a></td>
							 </td></tr>";
					  $no++;
					//   $counter++;
                ?>
                <script type="text/javascript">
                  function yourConfirm(id){
                  var r = confirm("Are you sure?");
                    if (r == true) {
                      window.location = "deletepengetahuan.php?id="+id;
                    } 
                  }
                  </script>
                  </tbody>
                <div class="modal fade" id="myModal<?= $r['kode_pengetahuan'] ?>" role="dialog" >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Pengetahuan</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form action="editpengetahuan.php" method="GET" role="form">
                            <input type="hidden" value="<?= $r['kode_pengetahuan'] ?>" name="kode_pengetahuan">
                            <div class="form-group">
                              <label> Nama Penyakit </label>
                              <input type="text" class="form-control" name="nama_penyakit" value="<?= $r['nama_penyakit'] ?>" disabled required>
                            </div>
                            <div class="form-group">
                              <label> Gejala </label>
                              <input type="text" class="form-control" name="gejala" value="<?= $rgejala['nama_gejala'] ?>" disabled required>
                            </div>
							<div class="form-group">
                              <label> MB </label>
                              <input type="text" class="form-control" name="mb" value="<?= $r['mb'] ?>" required>
                            </div>
							<div class="form-group">
                              <label> MD </label>
                              <input type="text" class="form-control" name="md" value="<?= $r['md'] ?>" required>
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
					<?php  } ?>
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
        <h4 class="modal-title"> Tambah Pengetahuan</h4>
        <button type="button" class="close" data-dismiss="modal"> &times;</button>
      </div>
      <div class="modal-body">
        <form action="tambahpengetahuan.php" method="POST" role="form">
          <div class="form-group">
            <label> Nama Penyakit </label>
			<select class='form-control' name='kode_penyakit'  id='kode_penyakit' require>
			<option value="" class="form-control"> - Pilih Penyakit - </option>
			<?php $hasil4 = mysqli_query($konek,"select * from penyakit order by nama_penyakit") ;
				while($r4 = mysqli_fetch_array($hasil4)){			
					echo "<option value='$r4[kode_penyakit]'>$r4[nama_penyakit]</option>";
				}
			?>
			</select>
          </div>
          <div class="form-group">
          <label> Nama Gejala </label>
			<select class='form-control' name='kode_gejala'  id='kode_gejala'>
			<option value="" class="form-control">  - Pilih Gejala - </option>
			<?php $hasil5 = mysqli_query($konek,"select * from gejala order by nama_gejala") ;
				while($r5 = mysqli_fetch_array($hasil5)){			
					echo "<option value='$r5[kode_gejala]'>$r5[nama_gejala]</option>";
				}
			?>
			</select>
          </div>
          <div class="form-group">
            <label> MB <sub> (Nilai Menggunakan Titik) </sub> </label>
            <input class="form-control" type="text" name="mb" required >
          </div>
		  <div class="form-group">
            <label> MD <sub> (Nilai Menggunakan Titik) </sub> </label>
            <input class="form-control" type="text" name="md" required >
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