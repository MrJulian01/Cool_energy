<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "energy";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Test if connection succeeded
if(!$connection){
  die("Database query failed.");
}

?>
