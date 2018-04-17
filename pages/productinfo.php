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

    <!-- header -->
    <header>
      <!-- navigation -->
      <?php include "../includes/nav.php"?>

      <div class="header_content">
        <h1>productinfo</h1>
      </div>
    </header>


    <!-- ________________________________________ -->

    <main id="main_content">
      <section id="top_content">
        <article class="left_article">
          <h4>Energy aardbei</h4>
          <p>COOL Energy Drink wordt wereldwijd gewaardeerd door topatleten, studenten en prestatiegerichte professionals. COOL Energy houdt je lichaam heerlijk fris voor een nieuwe zonnige dag.</p>

          <div>
            <a href="">bekijk meer</a>
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
        <article class="right_article">
          <h4>Nutrition Facts</h4>
          <p>COOL Energy gebruikt alleen natuurlijke producten, waaronder suiker vanuit de suikerbieten en bronwater uit de Alphen, het water heeft een frisse smaak en heeft daarom de beste kwaliteit.</p>

          <div>
            <a href="">lees meer</a>
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
