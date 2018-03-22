<?php
  // includes db connection
  include "conn.php";

  // makes the query
  // remove limit 1 later
  $sql =  "SELECT actienaam, afbeelding, omschrijving FROM actie WHERE einddatum > NOW() AND begindatum < NOW();";
  $result = mysqli_query($conn, $sql);

  // checks if the query arrives
  if(!$result){
    die("Database query error");
  }

  // display the data
  while($row = mysqli_fetch_row($result)){
    echo "<h3>".$row[0]."</h3>";
    echo /*"<img src='".."'>"*/;  // insert img
    echo "<p>".$row[2]."</p><br>";
  }

  // empty the var
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);
  ?>
