<?php


    if(isset($_POST["logout"])){
// remove all session variables
        session_start();
session_unset();

// destroy the session
session_destroy();
        header('location:./home.php');
    }
?>

