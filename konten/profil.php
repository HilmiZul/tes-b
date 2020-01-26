<?php 
$id = $_SESSION['id'];
$q = mysqli_query($konek, "select * from tb_users where uid=$id");
$data = mysqli_fetch_assoc($q);
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profil</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div><strong><?php print $_SESSION['uname']?></strong></div>
                  <div class=""><?php print $data['no_rek']?>: Rp9.000.000</div>
                  <!-- <div class="">123456789: Rp9.000.000</div> -->
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <a class="btn btn-success" data-toggle="collapse" href="#trf" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa fa-paper-plane"></i> Transfer
              </a>
            </div>
          
            <div class="collapse mt-3" id="trf">
              <div class=" col-lg-12 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Transfer</div>
                        <form action="" method="post">
                          <div class="form-group">
                            <input type="number" class="form-control" placeholder="Rekening tujuan">
                          </div>
                          <div class="form-group">
                            <input type="number" class="form-control" placeholder="Nominal transfer">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Keterangan (opsioanl)">
                          </div>
                          <button type="submit" class="btn btn-success">Kirim</button>
                        </form>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>