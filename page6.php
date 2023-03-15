<?php
session_start();
$_SESSION['rep5'] = ($_POST['reponse5']);
$_SESSION['rep1'];
$_SESSION['rep2'];
$_SESSION['rep3'];
$_SESSION['rep4'];

?>

<!DOCTYPE html>
<html class="html1">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylep1.css">
    <title>Tester mon amour</title>

<!-- navbar -->
<nav>
   <ul>
      <li><a href="#" class="btn">Listixar</a></li>
     
    </ul>
  </nav>


  </head>
  <body class="bodyMaman">
<div class="full-screen">
    <form action="page7.php" method="post">
    <h2 class="page">Parles-tu ou as-tu envie de parler de lui/elle à tout le monde ?</h2>
    <p class="p1">A : Oui, tout le temps</br>B : Oui, souvent</br>C : Pas vraiment</br>D : Pas du tout</br>
      <input class="input1" type="text" placeholder="Ex : A" name="reponse6" />

        <input type="submit" value="Valider" maxlength="1"/>
    </p>

</div>
  </body>
</html>
