<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'db.php';
    $author_name = $_POST['author_name'];
    $summary = $_POST['summary'];
    $id = $_POST['id'];
    $update = "UPDATE testimonials SET author_name = '$author_name',summary='$summary' WHERE id = $id ";
    $query = mysqli_query($connection,$update);
    header('location:testimonials-list.php');
    $upload_image = $_FILES['image'];
    $explode = explode('.',$upload_image['name']);
    $ext = end($explode);
    $allow_format = ['jpg','png','jpeg','PNG'];
    if (in_array($ext, $allow_format)) {
        if ($upload_image['size'] <= 3000000) {
            $select = "SELECT * FROM testimonials WHERE id = $id";
            $q = mysqli_query($connection,$select);
            $assc = mysqli_fetch_assoc($q);
            if (file_exists('upload/testimonials/'. $assc['image'])) {
              unlink('upload/testimonials/'. $assc['image']);
            }
            $image_name = $id.'.'.$ext;
            $up = "UPDATE service SET author_name = '$author_name',summary='$summary', image = '$image_name' where id = $id";
            $q_update = mysqli_query($connection,$up);
            $new_location = 'upload/testimonials/'.$image_name;
            move_uploaded_file($upload_image['tmp_name'],$new_location);
            header('location:testimonials-list.php');
        }
     }
 }
?>