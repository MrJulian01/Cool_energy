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
$begindatumInput = test_input($_POST['begindatum']);
$einddatumInput = test_input($_POST['einddatum']);
$omschrijvingInput = test_input($_POST['omschrijving']);
$artiestidInput = test_input($_POST['artiestid']);

$actieidInput = mysqli_real_escape_string($conn, $actieidInput);
$actienaamInput = mysqli_real_escape_string($conn, $actienaamInput);
$begindatumInput = mysqli_real_escape_string($conn, $begindatumInput);
$einddatumInput = mysqli_real_escape_string($conn, $einddatumInput);
$omschrijvingInput = mysqli_real_escape_string($conn, $omschrijvingInput);
$artiestidInput = mysqli_real_escape_string($conn, $artiestidInput);

$begindatumInput = strtotime($_POST["begindatum"]);
$begindatumInput = date('Y-m-d H:i:s', $begindatumInput);

$einddatumInput = strtotime($_POST["einddatum"]);
$einddatumInput = date('Y-m-d H:i:s', $einddatumInput);

    // 2. Perform database query
    $sql= "INSERT INTO actie (actieid, actienaam, begindatum, einddatum, omschrijving, artiestid) VALUES ('$actieidInput', '$actienaamInput', '$begindatumInput', '$einddatumInput', '$omschrijvingInput', '$artiestidInput')";
    if(mysqli_query($conn, $sql)){
    echo "Actie toegevoegd";
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
