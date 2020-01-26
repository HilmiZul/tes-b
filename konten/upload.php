<?php
if (isset($_POST['kirim'])) {
  $nama_usaha = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $uid = $_SESSION['id'];

  $ekstensi_diperbolehkan	= array('png','jpg');
  $nama = $_FILES['foto']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran	= $_FILES['foto']['size'];
  $file_tmp = $_FILES['foto']['tmp_name'];	

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){			
      move_uploaded_file($file_tmp, 'file/'.$nama);
      $query = mysqli_query($konek, "INSERT INTO tb_usaha VALUES(
                                    NULL, '$nama_usaha',
                                    '$jenis', '$nama', $uid
                                    )");
      if($query){
        $pesan = "<div class='alert alert-success'>FILE BERHASIL DI UPLOAD</div>";
      }else{
        $pesan = "<div class='alert alert-danger'>GAGAL MENGUPLOAD GAMBAR</div>";
      }
    }else{
      $pesan = "<div class='alert alert-danger'>UKURAN FILE TERLALU BESAR</div>";
    }
  }else{
    $pesan = "<div class='alert alert-danger'>EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN</div>";
  }
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">
    Upload foto usaha
    <a href="?menu=usaha-saya" class="btn btn-danger">Kembali</a>
  </h1>
  <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card shadow h-100 py-2">
      <div class="card-body">
        <?php print $pesan ?>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama usaha" required>
          </div>
          <div class="form-group">
            <label for="jenis">JENIS:</label><br>
            <input type="radio" name="jenis" value="usaha" id="usaha"required> <label for="usaha">Usaha</label> <br>
            <input type="radio" name="jenis" value="usaha" id="jasa"required> <label for="jasa">Jasa</label>
          </div>
          <div class="form-group">
            <label for="">Pilih foto</label>
            <input type="file" name="foto" accept="image/*" class="form-control" placeholder="Nama usaha" required>
          </div>
          <button type="submit" name="kirim" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Kirim</button>
        </form>
      </div>
    </div>
  </div>

</div>