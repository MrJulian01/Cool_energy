<?php
  include '../includes/conn.php';
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
    <link rel="stylesheet" href="../css/info.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Cool energy</title>
  </head>
  <body>

    <!-- ________________________________________ -->

    <header id="header">
      <div class="header_content">
        <h1>productinfo</h1>
      </div>
    </header>


    <!-- ________________________________________ -->

      <nav id="nav">
        <a href="../index.php">Home</a>
        <a href="productinfo.php">Productinfo</a>
        <a href="eventlijst.php">Eventlijst</a>
        <a href="acties.php">Alle acties</a>
      </nav>


    <!-- ________________________________________ -->

    <main id="main_content">
      <section id="top_content">
        <article>
          <h4>Energy aardbei</h4>
          <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit, sed do eiusmod tempor incididunt utris nisi ut aliquip ex ea commodo consequat.</p>

          <div>
            <a href="">lorem ipsum</a>
          </div>
        </article>

        <article>
          <img id="display" src="../img/Display_aarbei.png" alt="display">
        </article>
      </section>


      <section id="middle_content">
        <article>
          <img id="nutrition" src="../img/Nutrition.png" alt="Nutrition Facts">
        </article>
        <article>
          <h4>Energy aardbei</h4>
          <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit, sed do eiusmod tempor incididunt utris nisi ut aliquip ex ea commodo consequat.</p>

          <div>
            <a href="">lorem ipsum</a>
          </div>
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
