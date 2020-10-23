<?php
//include 'sequrity.php';
include 'inc/header.php';
include 'db.php';
?>
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">Starlight</a>
        <a class="breadcrumb-item" href="social-list.php">Social Item List</a>
      </nav>

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
              <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-20p">Name</th>
                  <th class="wd-15p">Icon</th>
                  <th class="wd-10p">Links</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $select = "SELECT * FROM social_link";
                $users = mysqli_query($connection,$select);
                foreach ($users as $key => $value) {
                  
                ?>
                <tr>
                  <td><?php echo $value['id'] ?></td>
                  <td><?php echo $value['name']?></td>
                  <td><?php echo $value['icon']?></td>
                  <td><?php echo $value['link']?></td>
                  <td>
                     <a class="btn btn-success" style="float:left;margin-right:10px;" href="social-edit.php?id=<?php echo $value['id']?>">edit</a>


                     <form action="social-delete.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $value['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
                  </td>
                </tr>
<?php
}
?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

      </div><!-- sl-pagebody -->
    <!-- ########## END: MAIN PANEL ########## -->
    <?php
     include 'inc/footer.php';
     ?>