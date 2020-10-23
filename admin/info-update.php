<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'db.php';
    $phone1 = $_POST['h_phone'];
    $phone2 = $_POST['f_phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $update = "UPDATE contact_info SET h_phone = '$phone1',f_phone='$phone2',address='$address',email='$email' WHERE id = $id ";
    $query = mysqli_query($connection,$update);
    mysqli_query('SET CHARACTER SET utf8');
    mysqli_query("SET SESSION collation_connection ='utf8_general_ci'");
    header('location:info.php');
 }
?>