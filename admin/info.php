<?php
//include 'sequrity.php';
include 'inc/header.php';
include 'db.php';
  $select = "SELECT COUNT(*) as total,id,h_phone,f_phone,address,email FROM contact_info";
  $q = mysqli_query($connection,$select);
  $asc = mysqli_fetch_assoc($q);

?>
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <a class="breadcrumb-item active" href="info.php">Contact INFO</a>
        (<?php echo $asc['total'] ?>)
      </nav>

      <div class="sl-pagebody">

      <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Additional Information</h6>
<?php
if ($asc['total'] > 0) {
  ?>
  <form action="info-update.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $asc['id']?>">

              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Header Phone: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" name="h_phone" placeholder="Enter Logo name" value="<?php echo $asc['h_phone']?>" >
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Footer Phone: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" name="f_phone" placeholder="Enter Logo name" value="<?php echo $asc['f_phone']?>" >
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" name="address" placeholder="Enter Logo name" value="<?php echo $asc['address']?>" >
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">email: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="email" class="form-control" name="email" placeholder="Enter Logo name" value="<?php echo $asc['email']?>" >
                </div>
              </div>
 


              <div class="form-layout-footer mg-t-30 text-center">
                <button style="cursor:pointer;" class="btn btn-info mg-r-5">Update</button>
              </div><!-- form-layout-footer -->
            </form>
<?php
}
else{
  ?>
  <form action="info-post.php" method="post" enctype="multipart/form-data">

                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Header Phone: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" name="h_phone" placeholder="Enter Logo name">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Footer Phone: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" name="f_phone" placeholder="Enter Logo name">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Address : <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" name="address" placeholder="Enter Logo name">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="email" class="form-control" name="email" placeholder="Enter Logo name">
                  </div>
                </div>

                <div class="form-layout-footer mg-t-30 text-center">
                  <button style="cursor:pointer;" class="btn btn-info mg-r-5">Submit</button> 
                </div><!-- form-layout-footer -->
              </form>
   <?php        
}
?>   
            </div><!-- card -->
        </div><!-- row -->
      </div><!-- sl-pagebody -->
    <!-- ########## END: MAIN PANEL ########## -->
    <?php
     include 'inc/footer.php';
     ?>
