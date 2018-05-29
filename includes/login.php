<?php
//Check for POST request

if($_SERVER['REQUEST_METHOD'] == 'POST'){

//Connects database to php
require("../includes/conn.php");

function test_input($data) {
  //$data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

$usernameInput = test_input($_POST['username']);
$passwordInput = test_input($_POST['password']);

$usernameInput = mysqli_real_escape_string($conn, $usernameInput);
$passwordInput = mysqli_real_escape_string($conn, $passwordInput);


    // 2. Perform database query
    $sql= "SELECT * FROM user WHERE username = '".$usernameInput."' AND password = '".$passwordInput."'";
    $result = mysqli_query($conn, $sql);
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
      header("Location: ../pages/adminpanel.php");
        }
      else{
        header("Location: ../pages/inloggen.php");
      }
    }

  //Username and/or password wrong
    else{
      header("Location: ../pages/inloggen.php");
    }
?>
