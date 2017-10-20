<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password) or die ("Could not save image name Error: " . mysqli_connect_error()); ;
$db="startup";
mysqli_select_db($conn,$db) or die("Could not select database");
?>
