<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">
    Usaha Saya
    <a href="?menu=upload" class="btn btn-primary">Upload</a>
    <a href="#" class="btn btn-success"><i class="fa fa-print"></i></a>
  </h1>
  <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <?php
  $q = mysqli_query($konek, "select a.*, b.* from tb_usaha a 
                            inner join tb_users b on a.uid=b.uid
                            where a.uid=".$_SESSION['id']."");
  while ($data = mysqli_fetch_array($q)) {
  ?>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card shadow h-100 py-2">
      <div class="card-body">
        <img src="file/<?php print $data['foto'] ?>" width="100%">
      </div>
      <div class="card-footer">
        <h5><?php print $data['nama'] ?></h5>
        <fieldset class="rating">
          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
          <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
          <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
          <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
          <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
          <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
      </fieldset>
      </div>
    </div>
  </div>
  <?php } ?>
  

</div>