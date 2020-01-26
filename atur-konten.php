<?php
if ($_GET['menu'] == '') {
  include("konten/home.html");
}
elseif($_GET['menu'] == 'home') {
  include("konten/home.html");
}
elseif($_GET['menu'] == 'keluar') {
  session_destroy();
  print "<meta http-equiv='refresh' content='0; url=?menu=login'>";
}
elseif($_GET['menu'] == 'profil') {
  include("konten/profil.php");
}
elseif($_GET['menu'] == 'usaha-saya') {
  include("konten/usaha-saya.php");
}
elseif($_GET['menu'] == 'cari-usaha') {
  include("konten/cari-usaha.html");
}
elseif($_GET['menu'] == 'hasil-cari') {
  include("konten/hasil-cari.html");
}
elseif($_GET['menu'] == 'usaha-lain') {
  include("konten/usaha-lain.html");
}
elseif($_GET['menu'] == 'kirim-pesan') {
  include("konten/kirim-pesan.html");
}
elseif($_GET['menu'] == 'upload') {
  include("konten/upload.php");
}