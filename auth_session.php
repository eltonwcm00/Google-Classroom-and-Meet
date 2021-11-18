<?php
    session_start();
    if(!isset($_SESSION["Admin_Email_Address"])){
        header("Location: index.php");
        exit(); 
    }
?>