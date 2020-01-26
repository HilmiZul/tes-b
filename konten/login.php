<?php
if (isset($_POST['kirim'])) {
  $uname = $_POST['uname'];
  $pass = $_POST['passwd'];

  $q = mysqli_query($konek, "select * from tb_users 
                            where uname='$uname' and passwd=md5('$pass')
                            ");
  $count = mysqli_num_rows($q);
  if ($count > 0) {
    $sesi = mysqli_fetch_assoc($q);

    $_SESSION['id'] = $sesi['uid'];
    $_SESSION['uname'] = $sesi['uname'];
    $_SESSION['level'] = $sesi['level'];

    print "<meta http-equiv='refresh' content='0; url=?menu=home'>";
  } else {
    $pesan = "<div class='alert alert-danger'>Username dan password tidak cocok!</div>";
  }
}
?>


<div class="container">
<!-- Outer Row -->
<div class="row justify-content-center">

<div class="col-xl-10 col-lg-12 col-md-9">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row justify-content-center">
        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
        <div class="col-lg-6">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">BRIMics</h1>
              <?php print $pesan ?>
            </div>
            <form class="user" action="" method="post">
              <div class="form-group">
                <input type="text" name="uname" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" autofocus>
              </div>
              <div class="form-group">
                <input type="password" name="passwd" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block" name="kirim">Login</button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="?menu=registrasi">Buat Akun!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

</div>
</div>