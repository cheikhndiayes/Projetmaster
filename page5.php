<?php
session_start();
$_SESSION['rep4'] = ($_POST['reponse4']);
$_SESSION['rep1'];
$_SESSION['rep2'];
$_SESSION['rep3'];

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
    <form action="page6.php" method="post">
    <h2 class="page">Tu es triste quand tu ne le/la vois pas pendant une journée :</h2>
    <p class="p1">A : Oui, mais j'arrive quand même à me ressaisir</br>B : Il/Elle me manque parfois</br>C : Non, pas du tout</br>D : Oui, je donnerais tout pour la/le voir</br>
      <input class="input1" type="text" placeholder="Ex : A" name="reponse5" />

        <input type="submit" value="Valider" maxlength="1"/>
    </p>

</div>
  </body>
</html>
