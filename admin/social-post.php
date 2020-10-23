<?php
	session_start();
	include 'db.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_POST['name'];
		$icon = $_POST['icon'];
		$link = $_POST['link'];

		$key = 0;
		if(!empty($name)){
			$key++;
		}else{
			$_SESSION['name'] = "Please enter your name!";
			header('location:index.php');
		}
		if(!empty($icon)){
            $key++;
		}else{
			$_SESSION['email'] = "Please enter your email";
			header('location:signup.php');
		}
		if(!empty($link)){
			$key++;
		}else{
			$_SESSION['message'] = "Please enter your phone number";
			header('location:index.php');
		}
		$sq = "INSERT INTO social_link(name,icon,link) VALUES('$name','$icon','$link')";
		if($key == 3){
			mysqli_query($connection,$sq);
			echo "suuccess";
			header('location:social-list.php');
		}else{
			echo "error";
		}

	}else{
		echo "aho vatija";
	}
?>