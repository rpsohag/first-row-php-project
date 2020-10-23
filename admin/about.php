<?php
//include 'sequrity.php';
include 'inc/header.php';
include 'db.php';
  $select = "SELECT COUNT(*) as total,id,title,summary, image FROM about";
  $q = mysqli_query($connection,$select);
  $asc = mysqli_fetch_assoc($q);

?>
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <a class="breadcrumb-item active" href="logo.php">Banner Content</a>
        (<?php echo $asc['total'] ?>)
      </nav>

      <div class="sl-pagebody">

      <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">About Content</h6>
<?php
if ($asc['total'] > 0) {
  ?>
  <form action="about-update.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $asc['id']?>">

              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Banner heading: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" name="title" placeholder="Enter Logo name" value="<?php echo $asc['title']?>" >
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Summary: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea  cols="35" rows="3" name="summary" style="width: 100%;" ><?php echo $asc['summary']?> </textarea>
                </div>
              </div>
              <div class="row"> 
                <label class="col-sm-4 form-control-label">Image Logo: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0" style="padding: 0.65rem 0.75rem;">
                  <input type="file" class="form-control" name="image" onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div><!-- row -->


              <div class="form-layout-footer mg-t-30 text-center">
                <button style="cursor:pointer;" class="btn btn-info mg-r-5">Update</button>
              </div><!-- form-layout-footer -->
            </form>
<?php
}
else{
  ?>
  <form action="about-post.php" method="post" enctype="multipart/form-data">

                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Banner Heading: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" name="title" placeholder="Enter Logo name">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Summary: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <textarea  cols="35" rows="3" name="summary" ><?php echo $asc['summary']?> </textarea>
                  </div>
                </div>
                <div class="row"> 
                <label class="col-sm-4 form-control-label">Image Logo: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0" style="padding: 0.65rem 0.75rem;">
                  <input type="file" class="form-control" name="image" onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div><!-- row -->
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
              <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">About Image</h6>


              <div class="row row-xs mg-t-20">
                <img id="logo" style="justify-content:center;" width="150" height="150" src="<?php
                if ($asc['total'] > 0) {
                    echo"upload/about/".$asc['image'];
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
              
            <div>
                <h2 style="float:left;">Whay cHose us?</h2>
        
                <!-- Button trigger modal -->
<button type="button" style="float:right;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="width: 500px;">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form action="about-headingpost.php" method="post">
<div class="form-group">
                <label for="title">Add title</label>
                <input type="text" id="title" class="form-control" name="heading" placeholder="enter your title">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="save">
      </div>
</form>
    </div>
  </div>
</div>
                
                

                <?php

$query = "SELECT * FROM  about_choose";
$query_run = mysqli_query($connection, $query);

?>
                <table class="table table-bordered"  width="100%" cellspacing="0">
        <thead>
          <tr>
              <th> ID </th>
              <th> Why Choose </th>
              <th>delete </th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>
            <td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['heading']; ?></td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
            } 
        }
        ?>
        </tbody>
      </table>
          </div>


            </div><!-- card -->
          </div><!-- col-6 -->

        </div><!-- row -->
      </div><!-- sl-pagebody -->
    <!-- ########## END: MAIN PANEL ########## -->
    <?php
     include 'inc/footer.php';
     ?>