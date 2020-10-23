<?php
//include 'sequrity.php';
include 'inc/header.php';
include 'db.php';
  $select = "SELECT COUNT(*) as total,id,text_logo, image FROM logo";
  $q = mysqli_query($connection,$select);
  $asc = mysqli_fetch_assoc($q);

?>
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <a class="breadcrumb-item active" href="logo.php">Logo Update</a>
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
  <form action="logo-update.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $asc['id']?>">
<div class="row"> 
                <label class="col-sm-4 form-control-label">Image Logo: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0" style="padding: 0.65rem 0.75rem;">
                  <input type="file" class="form-control" name="logo" onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Text Logo: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" name="text_logo" placeholder="Enter Logo name" value="<?php echo $asc['text_logo']?>" >
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
  <form action="logo-post.php" method="post" enctype="multipart/form-data">
  <div class="row"> 
                  <label class="col-sm-4 form-control-label">Image Logo: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0" style="padding: 0.65rem 0.75rem;">
                    <input type="file" class="form-control" name="logo" onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Text Logo: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" name="text_logo" placeholder="Enter Logo name">
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
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
              <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Logo Preview</h6>


              <div class="row row-xs mg-t-20">
                <img id="logo" width="150" height="150" src="<?php
                if ($asc['total'] > 0) {
                    echo"upload/logo/".$asc['image'];
                }else{
echo"assets/img/no-image.png";
                }
              ?>" alt="">
              </div><!-- row -->
              <div class="row row-xs mg-t-30">
                <div class="col-sm-8 mg-l-auto">
                  <div class="form-layout-footer">
                  </div><!-- form-layout-footer -->
                </div><!-- col-8 -->
              </div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->
      </div><!-- sl-pagebody -->
    <!-- ########## END: MAIN PANEL ########## -->
    <?php
     include 'inc/footer.php';
     ?>
