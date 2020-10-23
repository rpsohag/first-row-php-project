<?php
    session_start();
    include('db.php');
    if(!$_SESSION['email'])
    {
        header('Location: login.php');
    }
?>