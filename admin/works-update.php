<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'db.php';
    $title = $_POST['title'];
    $id = $_POST['id'];
    $update = "UPDATE works SET title = '$title'WHERE id = $id ";
    $query = mysqli_query($connection,$update);
    header('location:works-list.php');
    $upload_image = $_FILES['image'];
    $explode = explode('.',$upload_image['name']);
    $ext = end($explode);
    $allow_format = ['jpg','png','jpeg','PNG'];
    if (in_array($ext, $allow_format)) {
        if ($upload_image['size'] <= 3000000) {
            $select = "SELECT * FROM works WHERE id = $id";
            $q = mysqli_query($connection,$select);
            $assc = mysqli_fetch_assoc($q);
            if (file_exists('upload/works/'. $assc['image'])) {
              unlink('upload/works/'. $assc['image']);
            }
            $image_name = $id.'.'.$ext;
            $up = "UPDATE service SET title = '$title',image = '$image_name' where id = $id";
            $q_update = mysqli_query($connection,$up);
            $new_location = 'upload/works/'.$image_name;
            move_uploaded_file($upload_image['tmp_name'],$new_location);
            header('location:works-list.php');
        }
     }
 }
?>