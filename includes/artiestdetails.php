<?php
  // includes db connection
  include "conn.php";

  // makes the queries
  $sql =  "SELECT artiestid, artiestnaam, statement FROM artiest WHERE artiestid = ".$_GET['id'].";";
  $result = mysqli_query($conn, $sql);

  $sql2 = "SELECT eventid FROM event WHERE artiestid = ".$_GET['id'].";";
  $result2 = mysqli_query($conn, $sql2);

  // checks if the query arrives
  if(!$result || !$result2){
    die("Database query error");
  }

  // display the data
  while($row = mysqli_fetch_row($result)){
    echo "<img src='../img/artiest/".$row[0].".jpg'><br/>";
    echo "<strong>".$row[1]."</strong><br/>";
    echo "<i>".$row[2]."</i><br/>";
    echo "Aankomende events: <br/>";
  }

  while($row2 = mysqli_fetch_row($result2)){
    echo $row2[0]."<br/>";
  }

  // empty the var
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);
  ?>
