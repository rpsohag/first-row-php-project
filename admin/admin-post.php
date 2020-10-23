<?php
    include 'db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirmpassword'];
        $phash = password_hash($password, PASSWORD_DEFAULT);
        $email_query = "SELECT * FROM register WHERE email='$email' ";
        $email_query_run = mysqli_query($connection, $email_query);
        if(mysqli_num_rows($email_query_run) > 0)
        {
            $_SESSION['email'] = "Email Already Taken. Please Try Another one.";
        }
        else
        {
            if($password === $cpassword)
            {
                $query = "INSERT INTO register (username,email,phone,password) VALUES ('$username','$email','$phone','$phash')";
                $query_run = mysqli_query($connection, $query);
                header('location:admin-list.php');
                
            }
        }
    
    }



?>