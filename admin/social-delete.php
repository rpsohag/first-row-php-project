<?php
require 'db.php';
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM social_link WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: social-list.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: social-list.php'); 
    }    
}
    
?>