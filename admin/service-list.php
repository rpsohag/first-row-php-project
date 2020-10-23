
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

<h2>Service</h2>
  <a href="service.php" class="btn btn-info float-right">Add service</a>
  </div>
  <div class="card-body">

    <div class="table-responsive">
    <?php

        $query = "SELECT * FROM service";
        $query_run = mysqli_query($connection, $query);
        
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th> ID </th>
              <th> Title </th>
              <th> description </th>
              <th>image</th>
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
            <td><?php  echo $row['title']; ?></td>
            <td><?php  echo $row['description']; ?></td>
            <td><img src="<?php  echo "upload/service/".$row['image']; ?>" style="width: 100px; height:100px;" alt="no image"></td>
            <td>

            <a class="btn btn-success"  href="service_edit.php?id=<?php echo $row['id']?>">edit</a>
            </td>
            <td>
                <form action="service-delete.php" method="post">
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
<!-- /.container-fluid -->
        </div><!-- sl-pagebody -->
     <?php
     include 'inc/footer.php';
     ?>