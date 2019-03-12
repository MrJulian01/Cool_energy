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
         <h1>Acties</h1>
       </div>
     </header>


     <!-- ________________________________________ -->

     <main id="main_content">
       <section id="top_content">
         <article class="left_article">
           <h4>Actie toevoegen</h4>
           <form method="POST" action="../includes/add_acties.php">
             Actieid <input type="text" name="actieid"/><br>
             Actie naam <input type="text" name="actienaam"/><br>
             Begin datum en tijd <input type="text" name="begindatum"/><br>
             Eind datum en tijd <input type="text" name="einddatum"/><br>
             Omschrijving <input type="text" name="omschrijving"/><br>
             Artiestid <input type="text" name="artiestid"/><br>
             Foto <input type="text" name="picture"/><br>
             <input class="button" type="submit" name="submit" value="add"/><br>

             </form>
         </article>
       </section>

       <section id="middle_content">
         <article class="right_article">
           <h4>Update Actie</h4>
           <form method="POST" action="../includes/update_actie.php">
             <table>
             <tr><td>Actieid</td><td> <input type="text" name="actieid"/></td></tr>
             <tr><td>Begindatum</td><td> <input type="text" name="begindatum"/></td></tr>
             <tr><td>Einddatum en tijd</td><td> <input type="text" name="actieid"/></td></tr>
             <tr><td>Omschrijving</td><td> <input type="text" name="actieid"/></td></tr>
             

           </table>
             Actie naam <input type="text" name="actienaam"/><br>
             Begin datum en tijd <input type="text" name="begindatum"/><br>
             Eind datum en tijd <input type="text" name="einddatum"/><br>
             omschrijving <input type="text" name="omschrijving"/><br>
             Artiestid <input type="text" name="artiestid"/><br>
             Foto <input type="text" name="picture"/><br>
             Oude actieid <input type="text" name="oldactieid"/><br>
             <input class="button" type="submit" name="submit" value="update"/><br>

             </form>
         </article>
       </section>

       <section id="middle_content">
         <article class="right_article">
           <h4>Delete Actie</h4>
           <form method="POST" action="../includes/delete_actie.php">
             Actie naam <input type="text" name="actienaam"/><br>
             Actie ID <input type="text" name="actieid"/><br>
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
