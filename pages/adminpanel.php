<?php
 include '../includes/conn.php';
session_start();
//still logged in
if($_SESSION['ingelogd'] == "ja"){
  //echo "<a href='loguit.php'><button>Loguit</button></a>";
}

else{
  header("Location: ../pages/inloggen.php");
}
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="description" content="Cool_enegy_website">
     <meta name="author" content="Julian Houwaart">
     <meta name="keywords" content="energy, cool, website, ice, cold">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
     <link rel="stylesheet" href="../css/adminpanel.css">
     <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
     <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
     <title>Cool energy</title>
   </head>
   <body>

     <!-- header -->
     <header>
       <!-- navigation -->
       <?php include "../includes/nav1.php"?>

       <div class="header_content">
         <?php echo("<h1>"."Welkom ". $_SESSION['username']."</h1>")?>
       </div>
     </header>


     <!-- ________________________________________ -->

     <main id="main_content">
       <section id="top_content">
         <article class="left_article">
           <h4>User toevoegen</h4>
           <form method="POST" action="../includes/add.php">
             Username Toevoegen <input type="text" name="username"/><br>
             Bijbehorende Password <input type="text" name="password"/><br>
             Permission level <input type="text" name="permission"/><br>
             <input class="button" type="submit" name="submit" value="add"/><br>

             </form>
         </article>
       </section>

       <section id="middle_content">
         <article class="right_article">
           <h4>Update Accounts</h4>
           <form method="POST" action="../includes/update.php">
             Oude Username <input type="text" name="oldusername"/><br>
             Nieuwe Username <input type="text" name="username"/><br>
             Oude Password <input type="text" name="oldpassword"/><br>
             Nieuwe Password <input type="text" name="password"/><br>
             Permission level updaten <input type="text" name="permission"/><br>
             <input class="button" type="submit" name="submit" value="update"/><br>

             </form>
         </article>
       </section>

       <section id="middle_content">
         <article class="right_article">
           <h4>Delete Account</h4>
           <form method="POST" action="../includes/delete.php">
             Username <input type="text" name="username"/><br>
             Password <input type="text" name="password"/><br>
             Permission level <input type="text" name="permission"/><br>
             <input class="button" type="submit" name="submit" value="delete"/><br>

             </form>
         </article>
       </section>

       <section id="down_content">
         <article>
           <h4>Voor meer informatie</h4>
           <p><i id="icon" class="fa fa-desktop"></i> www.freemoa.nl <br><br> <i id="icon" class="fa fa-phone"></i> 0900 - 235 - 3227</p>
         </article>
         <article>
           <i id="icon2" class="fab fa-facebook-f"></i><i id="icon2" class="fab fa-instagram"></i><i id="icon2" class="fab fa-twitter"></i>
         </article>
       </section>

     </main>


     <!-- ___________________FOOTER_____________________ -->

     <?php include '../includes/footer.php'?>


     <!-- script to make navigation mobile-->
     <script src="../js/opennav.js"></script>

   </body>
 </html>
