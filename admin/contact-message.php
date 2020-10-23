<?php
	session_start();
	include 'db.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$key = 0;

		if(!empty($name)){
			$key++;
		}else{
			$_SESSION['name'] = "Please enter your name!";
			header('location:../index.php#contact');
		}
		if(!empty($email)){
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $key++;
				}else{
                 $_SESSION['email'] = "Email Not Valid";
				 header('location:../index.php#contact');
                }
		}else{
			$_SESSION['email'] = "Please enter your email";
			header('location:../index.php#contact');
		}
		if(!empty($message)){
			$key++;
		}else{
			$_SESSION['message'] = "Please enter your Message";
			header('location:../index.php#contact');
		}
		$sq = "INSERT INTO contact_message(name,email,message) VALUES('$name','$email','$message')";
		if($key == 3){
			mysqli_query($connection,$sq);
			$_SESSION['success'] = "Message successfully sent!";
			header('location:../index.php#contact');
		}else{
			echo "error";
		}

	}else{
		echo "aho vatija";
	}
?>