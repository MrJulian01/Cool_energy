<?php
//Check for POST request

if($_SERVER['REQUEST_METHOD'] == 'POST'){


  $ingevoerdeuser = $_POST['username'];
  $ingevoerdepass = $_POST['password'];
  require("dbconnect.php");

    // 2. Perform database query
    $sql= "SELECT * FROM user WHERE username = '".$ingevoerdeuser."' AND password = '".$ingevoerdepass."'";
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
        header("Location: inloggen.html");
      }
    }

  //Username and/or password wrong
    else{
      header("Location: inloggen.html");
    }
?>
