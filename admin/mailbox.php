<?php
//include 'sequrity.php';
include 'inc/header.php';
include 'db.php';
?>
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Tables</a>
        <span class="breadcrumb-item active">Data Table</span>
      </nav>

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
              <tr>
                  <th class="wd-15p">SL</th>
                  <th class="wd-15p">ID</th>
                  <th class="wd-20p">Name</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-10p">message</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $select = "SELECT * FROM contact_message";
                $users = mysqli_query($connection,$select);
                foreach ($users as $key => $value) {
                  
                ?>
                <tr
                <?php
                  if($value['status']== 1){
                   
echo "style='background:#D8DCE3'";
                  }else{
                    
 echo "style='background:white'";
                  }
                ?>
                >
                  <td><?php echo $key + 1 ?></td>
                  <td><?php echo $value['id'] ?></td>
                  <td><?php echo $value['name']?></td>
                  <td><?php echo $value['email']?></td>
                  <td><?php echo $value['message']?></td>
                  <td>
                 <?php
                  if ($value['status'] == 1) {
                    ?>
                     <a class="btn btn-success float-left" style="margin-right: 10px;"  href="read_unread.php?id=<?php echo $value['id']?>">read</a>
                     <?php
                  }else{
                    ?>
                        <a class="btn btn-danger float-left" style="margin-right: 10px;"  href="read_unread.php?id=<?php echo $value['id']?>">Unread</a>
                    <?php
                  }
                 ?>
               <form action="mail-delete.php" method="post">
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