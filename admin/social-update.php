<?php
    session_start();
    require 'db.php';
    $id = $_SESSION['id'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_POST['name'];
		$icon = $_POST['icon'];
        $link = $_POST['link'];
        $update = "UPDATE social_link SET name='$name', icon='$icon', link='$link' where id = $id";
        $query = mysqli_query($connection,$update);
        header('location:social-list.php');
    }
?>