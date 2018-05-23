<?php
  include 'includes/conn.php';
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
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Cool energy</title>
  </head>
  <body>

    <!-- _________________HEADER_________________ -->

    <header>
      <!-- navigation -->
      <nav id="nav" class="navigation">
        <a href="index.php">Home</a>
        <a href="pages/productinfo.php">Productinfo</a>
        <a href="pages/eventlijst.php">Eventlijst</a>
        <a href="pages/acties.php">Alle acties</a>
        <a href="javascript:void(0);" class="icon" onclick="opennav()">&#9776;</a>
        <a href="pages/inloggen.html">Login</a>
      </nav>


      <div class="header_content">
        <h1>COOL</h1>
        <p>ENERGY</p>
      </div>
    </header>

    <!-- ___________________MAIN_________________ -->

      <main>
        <section id="weekactie">
          <?php include 'includes/weekactie homepage.php'?>
        </section>
      </main>

    <!-- _________________ FOOTER_______________________ -->

    <?php include "includes/footer.php"?>
    <script type="text/javascript" src="js/opennav.js"></script>
  </body>
</html>
