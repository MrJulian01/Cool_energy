<?php
  // includes db connection
  include "conn.php";

  // makes the query
  $sql =  "SELECT actienaam, afbeelding, omschrijving, DATE_FORMAT(einddatum, '%d-%m-%y') FROM actie WHERE einddatum > NOW() AND begindatum < NOW();";
  $result = mysqli_query($conn, $sql);

  // checks if the query arrives
  if(!$result){
    die("Database query error");
  }

  // checks if there are any actions at the moment
  if(mysqli_num_rows($result) < 1){
    echo "Er is momenteel geen Actie";
  }

  // display the data
  while($row = mysqli_fetch_row($result)){
    echo "<h3>".$row[0]."</h3>";
    echo "<img src='img/actie/".$row[1]."'>";
    echo "<p>".$row[2]."</p>";
    echo "Deze actie geldt tot: ".$row[3];
  }

  // empty the var
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);
  ?>
