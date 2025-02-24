<?php

session_start();

?>
<?php include('php/lang.php') ?>
<!DOCTYPE html>
<html lang="<?php echo $symbole[$lang]; ?>">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre[$lang]; ?></title>
    <link rel="shortcut icon" href="img/Malik.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/location.css">
  </head>
  <body>
    <?php include("php/header.php"); ?>
    
    <div class="location-wrapper">
      <section id="location">

      </section>
    </div>
    
    
    <?php include("php/footer.php"); ?>
    <script src="js/script.js"></script>
  </body>
</html>