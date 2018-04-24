<?php
  // includes db connection
  include "conn.php";

  // makes the queries
  $sql =  "SELECT artiestid, artiestnaam, statement FROM artiest WHERE artiestid = ".$_GET['id'].";";
  $result = mysqli_query($conn, $sql);

  $sql2 = "SELECT DATE_FORMAT(e.datum, '%d-%m-%y'), l.gebouw, l.plaats FROM locatie l JOIN event e ON l.locatieid = e.locatieid WHERE e.artiestid = ".$_GET['id']." AND e.datum > NOW();";
  // the "e.datum > NOW()"" function is added to show the upcomming events. removing it would show all the events the artist will be attending
  $result2 = mysqli_query($conn, $sql2);

  // checks if the query arrives
  if(!$result || !$result2){
    die("Database query error");
  }

  // display the data
  while($row = mysqli_fetch_row($result)){
    echo "<img src='../img/artiest/".$row[0].".jpg'><br/>";
    echo "<b>".$row[1]."</b><br/>";
    echo '<i>"'.$row[2].'"</i><br/><br/>';
    echo "<b>Aankomende events:</b> <br/>";
  }

  while($row2 = mysqli_fetch_row($result2)){
    echo $row2[0]." ".$row2[1]." - ".$row2[2]."<br/>";
  }

  // empty the var
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);
  ?>
