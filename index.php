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

    <!-- ________________________________________ -->

    <header id="header">
      <div class="header_content">
        <h1>COOL</h1>
        <p>ENERGY</p>
      </div>
    </header>


    <!-- ________________________________________ -->

      <nav id="nav">
        <a href="index.php">Home</a>
        <a href="pages/productinfo.php">Productinfo</a>
        <a href="pages/eventlijst.php">Eventlijst</a>
        <a href="pages/acties.php">Alle acties</a>
      </nav>


    <!-- ________________________________________ -->

      <main id="main_content">
        <section id="top_content">
          <h2><strong>Aanbieding</strong> van de week</h2>
          <article>
            <h4>Cool energy drink</h4>
            <p>original of <br> andere smaken<br>
            3 blikjes á 25 cl</p>
            <h3><strike>&euro;1,65-</strike></h3>
            <h5 id="price">3 stuks <br> nu voor <strong>&euro;1,-</strong> </h5>

            <div>
              <a href="pages/acties.php"><i class="fas fa-shopping-cart"></i> Bekijk meer acties</a>
            </div>
          </article>

          <article>
            <img id="display" src="img/display.png" alt="display">
          </article>
        </section>

      </main>


    <!-- _________________ FOOTER_______________________ -->

    <?php include "includes/footer.php"?>
  </body>
</html>
