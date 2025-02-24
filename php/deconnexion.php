

<?php
  session_start();

  //suppresion des variables des session et de la session
  $_SESSION = array();
  session_destroy();
  
  // redirection vers la page d'acceuil
  header('location:../index.php');
  // exit();
?>

