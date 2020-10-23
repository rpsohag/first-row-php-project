<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'db.php';
    $title = $_POST['title'];
    $description = $_POST['description'];
    $id = $_POST['id'];
    $update = "UPDATE service SET title = '$title',description='$description' WHERE id = $id ";
    $query = mysqli_query($connection,$update);
    header('location:service-list.php');
    $upload_image = $_FILES['image'];
    $explode = explode('.',$upload_image['name']);
    $ext = end($explode);
    $allow_format = ['jpg','png','jpeg','PNG'];
    if (in_array($ext, $allow_format)) {
        if ($upload_image['size'] <= 3000000) {
            $select = "SELECT * FROM service WHERE id = $id";
            $q = mysqli_query($connection,$select);
            $assc = mysqli_fetch_assoc($q);
            if (file_exists('upload/service/'. $assc['image'])) {
              unlink('upload/service/'. $assc['image']);
            }
            $image_name = $id.'.'.$ext;
            $up = "UPDATE service SET title = '$title',description='$description', image = '$image_name' where id = $id";
            $q_update = mysqli_query($connection,$up);
            $new_location = 'upload/service/'.$image_name;
            move_uploaded_file($upload_image['tmp_name'],$new_location);
            header('location:service-list.php');
        }
     }
 }
?>