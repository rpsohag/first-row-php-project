<?php
require 'db.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $upload_image = $_FILES['image'];
            $explode = explode('.',$upload_image['name']);
            $ext = end($explode);
            $allow_format = ['jpg','png','jpeg','PNG'];
            if (in_array($ext, $allow_format)) {
                if ($upload_image['size'] <= 3000000) {
                    $insert = "INSERT INTO works(title,image) VALUES('$title','$upload_image')";
                    $query = mysqli_query($connection,$insert);
                    $last_id = mysqli_insert_id($connection);
                    $image_name = $last_id.'.'.$ext;
                    $new_location = 'upload/works/'.$image_name;
                    move_uploaded_file($upload_image['tmp_name'],$new_location);
                    $update = "UPDATE works SET image = '$image_name' WHERE id = $last_id";
                    $q = mysqli_query($connection,$update);
                    header('location:works-list.php');
                }else{
                    echo "image size too long";
                }
            }else{
                echo "not allow";
            }
        }
     ?>