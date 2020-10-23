<?php
session_start();
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $phone = $_POST['edit_phone'];
        $password = $_POST['edit_password'];
        $old_password = $_POST['old_password'];
        $query = "UPDATE register SET username='$username', email='$email',phone ='$phone' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code'] = "success";
            header('Location: admin-list.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code'] = "error";
            header('Location: admin_edit.php'); 
        }
    }
    
?>