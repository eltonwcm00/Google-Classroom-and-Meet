<?php
  $con = mysqli_connect("localhost","root","1234567890","google-classroom");
  
  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>