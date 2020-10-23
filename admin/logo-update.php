<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'db.php';
    $text = $_POST['text_logo'];
    $id = $_POST['id'];
    $update = "UPDATE logo SET text_logo = '$text' WHERE id = $id ";
    $query = mysqli_query($connection,$update);
    header('location:logo.php');
    $upload_image = $_FILES['logo'];
    $explode = explode('.',$upload_image['name']);
    $ext = end($explode);
    $allow_format = ['jpg','png','jpeg','PNG'];
    if (in_array($ext, $allow_format)) {
        if ($upload_image['size'] <= 3000000) {
            $select = "SELECT * FROM logo WHERE id = $id";
            $q = mysqli_query($db,$select);
            $assc = mysqli_fetch_assoc($q);
            if (file_exists('upload/logo/'. $assc['logo'])) {
              unlink('upload/logo/'. $assc['logo']);
            }
            $image_name = $id.'.'.$ext;
            $up = "UPDATE logo SET text_logo = '$text' , image = '$image_name' where id = $id";
            $q_update = mysqli_query($db,$up);
            $new_location = 'upload/logo/'.$image_name;
            move_uploaded_file($upload_image['tmp_name'],$new_location);
            header('location:logo.php');
        }
     }
 }
?>