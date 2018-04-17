<?php
  // includes db connection
  include "conn.php";

  // makes the query
  $sql =  "SELECT * FROM event;";
  $result = mysqli_query($conn, $sql);

  // checks if the query arrives
  if(!$result){
    die("Database query error");
  }

  // display the data
  while($row = mysqli_fetch_row($result)){
    echo "<img src=../img/event locatie/'".$row[4].".jpg'>";
    echo "datum: ".$row[2];
    echo ""; // knop naar artiest details
    echo "<br/>";  // knop naar eventdetails
  }

  // empty the var
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);
  ?>
