<?php

	session_start();
	require 'db.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email = $_POST['email'];
		 $password = $_POST['password'];
		 $check_user = "SELECT COUNT(*) as total, username, email, password FROM register where email = '$email'";
		 $user_query = mysqli_query($connection,$check_user);
		 $after_assoc = mysqli_fetch_assoc($user_query);
		

		if(!empty($email)){
			if ($after_assoc['total'] > 0) {

				$hash = $after_assoc['password'];
				if (password_verify($password, $hash)) {
					$_SESSION['name'] = $after_assoc['username'];
					$_SESSION['email'] = $after_assoc['email'];
					header('location:index.php');
				}else{
					$_SESSION['password'] = "your password is incorrect!";
					header('location:login.php');
				 }
			}else{
				$_SESSION['email'] = "Your email does not exist!";
				header('location:login.php');
			}
		}else{
			$_SESSION['email'] = "Please Enter your email";
			header('location:login.php');
		}











		 
    }
        ?>