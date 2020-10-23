<?php
include 'sequrity.php';
include 'inc/header.php';
include 'db.php';
  $select = "SELECT COUNT(*) as total,id,author_name,summary, image FROM testimonials";
  $q = mysqli_query($connection,$select);
  $asc = mysqli_fetch_assoc($q);

?>
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <a class="breadcrumb-item active" href="service.php">Total testimonials</a>
        (<?php echo $asc['total'] ?>)
      </nav>

      <div class="sl-pagebody">

      <div class="row row-sm mg-t-20" >
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">testimonials Content</h6>

  <form action="testimonials-post.php" method="post" enctype="multipart/form-data">

                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Title: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" name="author_name" placeholder="Enter Logo name">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Summary: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea  cols="35" rows="3" name="summary" style="width: 100%;" > </textarea>
                  </div>
                </div>
                <div class="row"> 
                <label class="col-sm-4 form-control-label">Image Logo: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0" style="padding: 0.65rem 0.75rem;">
                  <input type="file" class="form-control" name="image" onchange="document.getElementById('service').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div><!-- row -->
                <div class="form-layout-footer mg-t-30 text-center">
                                      <a href="testimonials-list.php" class="btn btn-info">Cancel</a>
                  <button style="cursor:pointer;" class="btn btn-info mg-r-5">Submit</button> 

                </div><!-- form-layout-footer -->
              </form>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
              <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Image Preview</h6>


              <div class="row row-xs mg-t-20">
                <img id="service" width="150" height="150" src="assets/img/no-image.png" alt="">
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
