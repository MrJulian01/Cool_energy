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

$usernameInput = test_input($_POST['username']);
$passwordInput = test_input($_POST['password']);
$permissionInput = test_input($_POST['permission']);

$usernameInput = mysqli_real_escape_string($conn, $usernameInput);
$passwordInput = mysqli_real_escape_string($conn, $passwordInput);
$permissionInput = mysqli_real_escape_string($conn, $permissionInput);


    // 2. Perform database query
    $sql= "INSERT INTO user (username, password, permission) VALUES ('$usernameInput', '$passwordInput', '$permissionInput')";
    if(mysqli_query($conn, $sql)){
    echo "Account toegevoegd";
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
