<?php
    session_start();
    if(!isset($_SESSION["Student_Email_Address"])){
        header("Location: ../index.php");
        exit(); 
    }
?>