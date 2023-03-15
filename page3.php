<?php
session_start();
$_SESSION['rep2'] = ($_POST['reponse2']);
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
    <form action="page4.php" method="post">
    <h2 class="page">Quand tu le/la vois ou quand tu entends quelqu'un prononcer son nom :</h2>
    <p class="p1">A : Tu deviens un peu nerveux/nerveuse</br>B :Ton coeur bat à 100 à l'heure</br>C : Tu es contente(e)
      </br>D : Tu es normal(e)</br> <input class="input1" type="text" placeholder="Ex : A" name="reponse3" />

        <input type="submit" value="Valider" maxlength="1"/>
    </p>

</div>
  </body>
</html>
