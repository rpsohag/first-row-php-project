


<?php
//include 'sequrity.php';
include 'inc/header.php';
include 'db.php';

?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">
      <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="admin-update.php" method="POST">
                
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
              
              <div class="form-group">
                  <label> Username </label>
                  <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
                  <span class="text-danger">
          <?php
            if(isset($_SESSION['edit_username'])){
                echo $_SESSION['edit_username'];
                unset ($_SESSION['edit_username']);
            }
          ?>
      </span>
              </div>
              <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
              </div>
              <div class="form-group">
                  <label>Phone</label>
                  <input type="text" name="edit_phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Enter Email">
              </div>
              <a href="admin-list.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    }
}
?>
  </div>
  </div>

</div>
<!-- /.container-fluid -->
        </div><!-- sl-pagebody -->
     <?php
     include 'inc/footer.php';
     ?>