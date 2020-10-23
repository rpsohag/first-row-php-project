<?php
include 'db.php';


// admin date delete code

// about choose delete 
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM about_choose WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        header('Location: about.php'); 
    }
}


if (isset($_POST['service_add'])) {
    $title = $_POST['service_title'];
    $description = $_POST['service_description'];
    $image = $_FILES['service_image']['name'];

    if (file_exists("upload/service".$_FILES['service_image']['name'])) {
        $store = $_FILES['service_image']['name'];
        $_SESSION['status'] = "'image already exists'.'$store'";
        header('location:service-list.php');
    }else{
            $query = "INSERT INTO service(title,description,image) VALUES ('$title','$description','$image')";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        move_uploaded_file($_FILES['service_image']['tmp_name'],"upload/service".$_FILES['service_image']['name']);
        $_SESSION['success'] = "'image already exists'.'$store'";
        header('location:service-list.php');
    }else{
        $_SESSION['success'] = "'image already exists'.'$store'";
        header('location:service-list.php');
    }
    }

}



    ?>