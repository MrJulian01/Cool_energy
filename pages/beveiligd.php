<?php

session_start();
if($_SESSION['ingelogd'] == "ja"){
  //still logged in
  echo "Welkom ". $_SESSION['username']."<br>";
  echo "<a href='loguit.php'><button>Loguit</button></a>";
}

else{
  header("Location: inloggen.html");
}
 ?>
