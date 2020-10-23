<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'db.php';
    $heading = $_POST['heading'];
    $summary = $_POST['summary'];
    $id = $_POST['id'];
    $update = "UPDATE banner SET heading = '$heading', summary= '$summary' WHERE id = $id ";
    $query = mysqli_query($connection,$update);
    header('location:banner.php');
    $upload_image = $_FILES['image'];
    $explode = explode('.',$upload_image['name']);
    $ext = end($explode);
    $allow_format = ['jpg','png','jpeg','PNG'];
    if (in_array($ext, $allow_format)) {
        if ($upload_image['size'] <= 3000000) {
            $select = "SELECT * FROM banner WHERE id = $id";
            $q = mysqli_query($connection,$select);
            $assc = mysqli_fetch_assoc($q);
            if (file_exists('upload/banner/'. $assc['image'])) {
              unlink('upload/banner/'. $assc['image']);
            }
            $image_name = $id.'.'.$ext;
            $up = "UPDATE banner SET heading = '$heading' ,summary='$summary', image = '$image_name' where id = $id";
            $q_update = mysqli_query($connection,$up);
            $new_location = 'upload/banner/'.$image_name;
            move_uploaded_file($upload_image['tmp_name'],$new_location);
            header('location:banner.php');
        }
     }
 }
?>