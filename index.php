<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
  include("konten/header.html");
  include("koneksi.php");

  ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php if (!empty($_SESSION['id'])) { ?>

    <?php 
      // include("konten/sidebar.html"); 
      ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include("konten/topbar.html"); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php include("atur-konten.php"); ?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php 
      // include("konten/footer.html"); 
      include("konten/bottom-nav.html"); 
      ?>

    </div>
    <!-- End of Content Wrapper -->

  <?php } else { 
    if ($_GET['menu'] == 'login' || $_GET['menu'] == '') {
      include("konten/login.php");
    } elseif ($_GET['menu'] == 'registrasi') {
      include("konten/registrasi.php");
    }
  } ?>
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include("konten/modal-logout.html"); ?>

  <?php include("konten/js.html"); ?>

</body>

</html>
