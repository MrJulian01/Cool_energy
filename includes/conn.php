<?php

  $host = "Localhost";
  $user = "root";
  $pass = "";
  $dbname = "energy";

  $conn = mysqli_connect($host, $user, $pass, $dbname);

  if (!$conn) {
    die("Database connection failed");
  }

?>
