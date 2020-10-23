<?php
include 'db.php';
    $id = $_GET['id'];
    $select = "SELECT * FROM contact_message where id = $id";
    $qu = mysqli_query($connection,$select);
    $assoc = mysqli_fetch_assoc($qu);
    $status = $assoc['status'];
    if ($status == 1) {
        $update = "UPDATE contact_message SET status = 2 where id = $id";
        $q = mysqli_query($connection,$update);
    }else{
        $update = "UPDATE contact_message SET status = 1 where id = $id";
        $q = mysqli_query($connection,$update);
    }
   header('location:mailbox.php');
?>