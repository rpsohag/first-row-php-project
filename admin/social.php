<?php
include 'sequrity.php';
include 'inc/header.php';
?>
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <a class="breadcrumb-item active" href="logo.php">Banner Content</a>
      </nav>

      <div class="sl-pagebody">

      <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Banner Content</h6>
  <form action="social-post.php" method="post" enctype="multipart/form-data">
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Name: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <select name="name" id="" class="form-control">
                        <option value="Facebook" class="dropdown-item">Facebook</option>
                        <option value="Twitter" class="dropdown-item">Twitter</option>
                        <option value="Behance" class="dropdown-item">Behance</option>
                        <option value="Linkedin" class="dropdown-item">linkedin</option>
                        <option value="Instagram" class="dropdown-item">Instagram</option>
                    </select>
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <select name="icon" id="" class="form-control">
                        <option value="fa fa-facebook" class="dropdown-item">Facebook</option>
                        <option value="fa fa-twitter" class="dropdown-item">twitter</option>
                        <option value="fa fa-behance" class="dropdown-item">Behance</option>
                        <option value="fa fa-linkedin" class="dropdown-item">linkedin</option>
                        <option value="fa fa-instagram" class="dropdown-item">Instagram</option>
                    </select>
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Link: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
<input type="text" class="form-control" name="link" placeholder="social liinks">
                  </div>
                </div>

                <div class="form-layout-footer mg-t-30 text-center">
                  <button style="cursor:pointer;" class="btn btn-info mg-r-5">Submit</button> 
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
