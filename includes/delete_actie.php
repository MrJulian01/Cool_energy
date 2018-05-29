<?php
//Check for POST request

if($_SERVER['REQUEST_METHOD'] == 'POST'){

//Connects database to php
require("conn.php");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$actieidInput = test_input($_POST['actieid']);
$actienaamInput = test_input($_POST['actienaam']);

$actieidInput = mysqli_real_escape_string($conn, $actieidInput);
$actienaamInput = mysqli_real_escape_string($conn, $actienaamInput);;


    // 2. Perform database query
    $sql= "DELETE FROM actie WHERE actieid = '$actieidInput' AND actienaam = '$actienaamInput'";
    if(mysqli_query($conn, $sql)){
    echo "Actie gedelete";
    }
    else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
  }
  //Username and/or password wrong
    else{
      header("Location: inloggen.php");
    }
?>
