
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


<a href="admin-add.php" class="btn btn-info float-right">Add admin</a>
  </div>
  <div class="card-body">

    <div class="table-responsive">
    <?php

        $query = "SELECT * FROM register";
        $query_run = mysqli_query($connection, $query);
        
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th> ID </th>
              <th> Username </th>
              <th>Email </th>
              <th>phone</th>
              <th>EDIT</th>
              <th>DELETE</th>
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
            <td><?php  echo $row['username']; ?></td>
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['phone']; ?></td>
            <td>
                <form action="admin_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-primary">    Edit  </button>
                </form>
            </td>
            <td>
                <form action="admin-delete.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>

</div>

</div>
<!-- /.container-fluid -->
        </div><!-- sl-pagebody -->
     <?php
     include 'inc/footer.php';
     ?>