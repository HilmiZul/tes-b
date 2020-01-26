<?php
if (isset($_POST['kirim'])) {
  $uname = $_POST['uname'];
  $no_hp = $_POST['no_hp'];
  $email = $_POST['email'];
  $no_rek = $_POST['no_rek'];
  $pass = $_POST['passwd'];

  $q = mysqli_query($konek, "insert into tb_users values (
                            NULL, '$uname', '-',
                            '$uname', '$no_hp', 
                            '$email', md5('$pass'),
                            '$no_rek', 'nasabah'
                            )");
  if ($q) {
    $pesan = "<div class='alert alert-success'>Selamat Akun berhasil dibuat!</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Terjadi Kesalahan saat mengirim data</div>";
  }
}

?>


<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                <?php print $pesan ?>
              </div>
              <form class="user" action="" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="uname" class="form-control form-control-user" id="exampleFirstName" placeholder="Username" required>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" name="no_hp" class="form-control form-control-user" id="exampleNoHp" placeholder="Nomor Handphone" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                  <input type="number" name="no_rek" maxlength="16" class="form-control form-control-user" id="exampleFirstName" placeholder="No.Rekening" required>
                </div>
                <div class="form-group">
                  <input type="password" name="passwd" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                </div>
                <button type="submit" name="kirim" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="?menu=login">Sudah punya Akun? Login disini!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>