<?php
  // Create Connection with Localhost
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "twitter";
 
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
