<?php
session_start();
$_SESSION['prenomEnfant'] = ($_POST['prenom2']);
$_SESSION['nomEnfant'] = ($_POST['nom2']);
$setp = 7

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listixar</title>
    <link rel="stylesheet" href="stylev2.css" >

<!-- navbar -->
<nav>
   <ul>
      <li><a href="#" class="btn">Listixar</a></li>
     
    </ul>
  </nav>

  </head>
  <body>
<div class="full-screen">
  <div>
<h2>Es-tu</br>vraiment amoureux(euse)?</h2>
    <br>
  <p>Réponds aux 10 questions du test</br>
pour savoir !</p>
    <a class="button-line" href="http://localhost:8888/listikhar/page1.php">Lancer</a>
  </div>
</div>
  </body>
</html>
