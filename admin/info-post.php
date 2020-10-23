<?php
require 'db.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $phone1 = $_POST['h_phone'];
            $phone2 = $_POST['f_phone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $insert = "INSERT INTO contact_info(h_phone,f_phone,address,email) VALUES('$phone1','$phone2','$address','$email')";
            $query = mysqli_query($connection,$insert);
        }
     ?>