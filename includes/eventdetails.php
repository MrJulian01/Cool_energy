<?php
  // includes db connection
  include "conn.php";

  // makes the query
  $sql =  "SELECT e.locatieid, DATE_FORMAT(e.datum, '%d-%m-%y'), DATE_FORMAT(e.datum, '%H:%i'), l.gebouw, l.plaats, a.artiestnaam, e.artiestid
  FROM event e JOIN locatie l ON e.locatieid= l.locatieid JOIN artiest a ON a.artiestid = e.artiestid
  WHERE e.eventid = ".$_GET['id'].";";
  $result = mysqli_query($conn, $sql);

  // checks if the query arrives
  if(!$result){
    die("Database query error");
  }

  // display the data
  while($row = mysqli_fetch_row($result)){
    echo "<img src='../img/event_locaties/".$row[0].".jpg'><br/>";
    echo "datum: ".$row[1]."<br/>";
    echo "tijd: ".$row[2]."<br/>";
    echo "Locatie: ".$row[3]." - ".$row[4]."</br>";
    echo "Artiest: ".$row[5]."<br/>";
    echo "<a href='artiestdetails.php?id=".$row[6]."'><button id='artiestdetails'>Artiestdetails</button></a>"; // knop naar artiest details
  }

  // empty the var
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);
  ?>
