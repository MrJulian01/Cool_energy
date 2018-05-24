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

$NewUsernameInput = test_input($_POST['username']);
$OldUsernameInput = test_input($_POST['oldusername']);
$NewPasswordInput = test_input($_POST['password']);
$OldPasswordInput = test_input($_POST['oldpassword']);
$permissionInput = test_input($_POST['permission']);

$NewUsernameInput = mysqli_real_escape_string($conn, $NewUsernameInput);
$OldUsernameInput = mysqli_real_escape_string($conn, $OldUsernameInput);
$NewPasswordInput = mysqli_real_escape_string($conn, $NewPasswordInput);
$OldPasswordInput = mysqli_real_escape_string($conn, $OldPasswordInput);
$permissionInput = mysqli_real_escape_string($conn, $permissionInput);


    // 2. Perform database query
    $sql= "UPDATE user SET username = '$NewUsernameInput', password = '$NewPasswordInput', permission = '$permissionInput' WHERE username = '$OldUsernameInput' AND password = '$OldPasswordInput'";
    if(mysqli_query($conn, $sql)){
    echo "Account geupdate";
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
