<?php
session_start();
$_SESSION['rep6'] = ($_POST['reponse6']);
$_SESSION['rep1'];
$_SESSION['rep2'];
$_SESSION['rep3'];
$_SESSION['rep4'];
$_SESSION['rep5'];
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
    <form action="page8.php" method="post">
    <h2 class="page">Est-ce que tu relis les messages qu'il/elle t'a envoyé ?</h2>
    <p class="p1">A : Oui, je relis toujours les meilleurs messages quand il/elle me manque</br>B : Oui, tout le temps</br>
      C : Ça m'arrive oui</br>D : Pas vraiment.</br> <input class="input1" type="text" placeholder="Ex : A" name="reponse7" />

        <input type="submit" value="Valider" maxlength="1"/>
    </p>

</div>
  </body>
</html>
