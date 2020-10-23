<?php
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $heading = $_POST['heading'];


                $query = "INSERT INTO about_choose(heading) VALUES ('$heading')";
                $query_run = mysqli_query($connection, $query);
                if ($query_run) {
                    header('location:about.php');
                }


        
    
    }
?>