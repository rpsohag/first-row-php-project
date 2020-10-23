<?php
//include 'sequrity.php';
 include 'inc/header.php';
require 'db.php';
$id = $_GET['id'];
$select = "SELECT * FROM social_link where id = $id";
$q = mysqli_query($connection,$select);
$after_assoc = mysqli_fetch_assoc($q);
$_SESSION['id'] = $id;

?>
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <a class="breadcrumb-item active" href="social-list.php"> Social</a>
      </nav>

      <div class="sl-pagebody">

      <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Social Content</h6>

  <form action="social-update.php" method="post" enctype="multipart/form-data">
  <input type="hidden" class="form-control" id="id" value="<?php echo $after_assoc['id']?>" name="id">
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Social Name: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <select name="name" id="name" class="form-control">
                    <option <?= $after_assoc['name']=='Facebook'? 'selected':''?> value="<?= $after_assoc['name']?>">Facebook</option>
                    <option <?= $after_assoc['name']=='Twitter'? 'selected':''?> value="<?= $after_assoc['name']?>">Twitter</option>
                    <option <?= $after_assoc['name']=='Behance'? 'selected':''?> value="<?= $after_assoc['name']?>">Behance</option>
                    <option <?= $after_assoc['name']=='Linkedin'? 'selected':''?> value="<?= $after_assoc['name']?>">Linkedin</option>
                    <option <?= $after_assoc['name']=='Instagram'? 'selected':''?> value="<?= $after_assoc['name']?>">Instagram</option>
                  </select>
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Social Icon: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <select name="icon" id="icon" class="form-control">
                    <option <?= $after_assoc['icon']=='fa fa-facebook'? 'selected':''?> value="<?= $after_assoc['icon']?>">Facebook</option>
                    <option <?= $after_assoc['icon']=='fa fa-twitter'? 'selected':''?> value="<?= $after_assoc['icon']?>">Twitter</option>
                    <option <?= $after_assoc['icon']=='fa fa-behance'? 'selected':''?> value="<?= $after_assoc['icon']?>">Behance</option>
                    <option <?= $after_assoc['icon']=='fa fa-linkedin'? 'selected':''?> value="<?= $after_assoc['icon']?>">Linkedin</option>
                    <option <?= $after_assoc['icon']=='fa fa-instagram'? 'selected':''?> value="<?= $after_assoc['icon']?>">Instagram</option>
                  </select>
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Social Links: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="link" class="form-control" value="<?php echo $after_assoc['link']?> ">
                  </div>
                </div>

                <div class="form-layout-footer mg-t-30 text-center">
                  <a href="social-list.php" class="btn btn-info">Cancel</a>
                  <button style="cursor:pointer;" class="btn btn-info mg-r-5">Update</button> 
                </div><!-- form-layout-footer -->
              </form>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->
      </div><!-- sl-pagebody -->
    <!-- ########## END: MAIN PANEL ########## -->
    <?php
     include 'inc/footer.php';
     ?>
