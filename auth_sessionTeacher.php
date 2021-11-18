<?php
    session_start();
    if(!isset($_SESSION["Teacher_Email_Address"])){
        header("Location: ../index.php");
        exit(); 
    }
?>