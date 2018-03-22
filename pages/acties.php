<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Cool_enegy_website">
    <meta name="author" content="Steven Dahlhaus Carmona">
    <meta name="keywords" content="energy, cool, website, ice, cold, cool energy acties,">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="../css/acties.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Cool energy</title>
  </head>
  <body>

    <!-- header -->
    <header>
      <div class="header_content">
        <h1>acties</h1>
      </div>
    </header>

    <!-- navigation -->
    <?php include "../includes/nav.php"?>

    <!-- main -->
    <main id="main_content">
      <section id="weekactie">
        <h2><strong>Aanbieding</strong> van de week</h2>
        <?php include '../includes/weekactie.php'?>
      </section>

      <section id="acties">
        <h2>Onze andere <strong>aanbiedingen</strong></h2>
        <?php include '../includes/acties.php'?>
      </section>
    </main>

    <!-- footer -->
    <?php include "../includes/footer.php"?>

  </body>
</html>
