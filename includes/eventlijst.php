<?php
  // includes db connection
  include "conn.php";

  // makes the query
  $sql =  "SELECT DATE_FORMAT(datum, '%d-%m-%y'), locatieid, artiestid, eventid FROM event;";
  $result = mysqli_query($conn, $sql);

  // checks if the query arrives
  if(!$result){
    die("Database query error");
  }

  // display the data
  while($row = mysqli_fetch_row($result)){
    echo "<img src='../img/event_locaties/".$row[1].".jpg'><br/>";
    echo "datum: ".$row[0]."<br/>";
    echo "<a href='artiestdetails.php?id=".$row[2]."'><button id='artiestdetails'>Artiestdetails</button></a>"; // knop naar artiest details
    echo "<a href='eventdetails.php?id=".$row[3]."'><button id='eventdetails'>Eventdetails</button></a>"; // knop naar eventdetails
    echo "<br/><br/>";
  }

  // empty the var
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);
  ?>
