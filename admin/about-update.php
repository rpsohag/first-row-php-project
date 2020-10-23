<?php

    require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $id = $_POST['id'];
    $update = "UPDATE about SET title = '$title', summary= '$summary' WHERE id = $id ";
    $query = mysqli_query($connection,$update);
    header('location:about.php');
    $upload_image = $_FILES['image'];
    $explode = explode('.',$upload_image['name']);
    $ext = end($explode);
    $allow_format = ['jpg','png','jpeg','PNG'];
    if (in_array($ext, $allow_format)) {
        if ($upload_image['size'] <= 3000000) {
            $select = "SELECT * FROM about WHERE id = $id";
            $q = mysqli_query($connection,$select);
            $assc = mysqli_fetch_assoc($q);
            if (file_exists('upload/about/'. $assc['image'])) {
              unlink('upload/about/'. $assc['image']);
            }
            $image_name = $id.'.'.$ext;
            $up = "UPDATE about SET title = '$title' ,summary='$summary', image = '$image_name' where id = $id";
            $q_update = mysqli_query($connection,$up);
            $new_location = 'upload/about/'.$image_name;
            move_uploaded_file($upload_image['tmp_name'],$new_location);
            header('location:about.php');
        }
     }
 }
?>