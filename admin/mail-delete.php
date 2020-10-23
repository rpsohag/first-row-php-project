<?php

include 'db.php';
    if(isset($_POST['delete_btn']))
    {
        $id = $_POST['delete_id'];
    
        $query = "DELETE FROM contact_message WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
			$_SESSION['success'] = "<strong>Success!</strong> Message Successfully deleted";
			header('location:mailbox.php');
        }
    }
?>