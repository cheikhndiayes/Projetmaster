<?php
session_start();
$_SESSION['rep3'] = ($_POST['reponse3']);
$_SESSION['rep1'];
$_SESSION['rep2'];

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
    <form action="page5.php" method="post">
    <h2 class="page">Tu ne te sépares pas de ton téléphone car tu attends un appel/sms de sa part :</h2>
    <p class="p1">A : Ça m'est arrivé 1 ou 2 fois</br>B : Tout le temps</br>C : Oui, des fois</br>D : Pas du tout</br> <input class="input1" type="text" placeholder="Ex : A" name="reponse4" />

        <input type="submit" value="Valider" maxlength="1"/>
    </p>

</div>
  </body>
</html>
