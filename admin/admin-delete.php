<?php

include 'db.php';
    if(isset($_POST['delete_btn']))
    {
        $id = $_POST['delete_id'];
    
        $query = "DELETE FROM register WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Deleted";
            $_SESSION['status_code'] = "success";
            header('Location: admin-list.php'); 
        }
    }
?>