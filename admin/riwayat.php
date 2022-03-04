<?php 
    $page='riwayat';
    include 'header.php';
?>

<div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h4 mb-0 text-gray-800">RIWAYAT</h3>
        </div>
    <div class="row">
    <div class="col-xl-12 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">RIWAYAT</h6>
            </div>
            <div class="card-body">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Penyakit</th>
                      <th>Nilai CF</th>
                    </tr>
                  </thead>
              <?php 
              $sqlpkt = mysqli_query($konek,"SELECT * FROM penyakit order by kode_penyakit+0");
              while ($rpkt = mysqli_fetch_array($sqlpkt)) {
                  $arpkt[$rpkt['kode_penyakit']] = $rpkt['nama_penyakit'];
              }
                 $tampil = mysqli_query($konek,"SELECT * FROM hasil ORDER BY id_hasil");
                 $data= [];
                   while ($isi = mysqli_fetch_array($tampil)){
                     $data[]=$isi;
                     
                   }
                   $id=1;
                   foreach($data as $row):
              ?>        
              <tbody>
                <tr>
                  <td><?= $id ?></td>
                  <td><?= $row['tanggal'] ?></td>
                  <td><?= $arpkt[$row['hasil_id']] ?></td>
                  <td><?= $row['hasil_nilai'] ?></td>
                </tr>
              </tbody>
              <?php 
              $id++;
              endforeach;
              
              ?>
          </table>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>


<?php 

    include 'footer.php';
?>