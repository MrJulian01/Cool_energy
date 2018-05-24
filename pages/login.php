<?php
//Check for POST request

if($_SERVER['REQUEST_METHOD'] == 'POST'){

//Connects database to php
require("dbconnect.php");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$usernameInput = test_input($_POST['username']);
$passwordInput = test_input($_POST['password']);

$usernameInput = mysqli_real_escape_string($connection, $usernameInput);
$passwordInput = mysqli_real_escape_string($connection, $passwordInput);


    // 2. Perform database query
    $sql= "SELECT * FROM user WHERE username = '".$usernameInput."' AND password = '".$passwordInput."'";
    $result = mysqli_query($connection, $sql);
    // Test if there was a query error
    if(!$result){
      die("Database query failed.");
    }

    // 3. Use data
    $aantal = mysqli_num_rows($result);

    //username and password are good
    if($aantal == 1){
      session_start();
      $user = mysqli_fetch_row($result);
      $_SESSION['ingelogd'] = "ja";
      $_SESSION['username'] = $user[0];
      header("Location: beveiligd.php");
        }
      else{
        header("Location: inloggen.php");
      }
    }

  //Username and/or password wrong
    else{
      header("Location: inloggen.php");
    }
?>
