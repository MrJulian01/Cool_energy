<?php
  // includes db connection
  include "conn.php";

  // makes the query
  $sql =  "SELECT actienaam, afbeelding, omschrijving, DATE_FORMAT(einddatum, '%d-%m-%y') FROM actie;";
  $result = mysqli_query($conn, $sql);

  // checks if the query arrives
  if(!$result){
    die("Database query error");
  }

  // display the data
  while($row = mysqli_fetch_row($result)){
    echo "<h3>".$row[0]."</h3>";
    echo "<img src='../img/temptea.png'>"; // add $row[1] later
    echo "<p>".$row[2]."</p>";
    echo "Deze actie geld tot: ".$row[3];
  }

  // empty the var
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);
  ?>
