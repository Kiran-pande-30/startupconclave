<?php
    session_start();
    if(!isset($_SESSION['auth'])){
        $_SESSION['status'] = "Please Login to continue";
        header('LOCATION:index.php');
        exit(0);

    }
?>