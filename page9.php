<?php
session_start();
$_SESSION['rep8'] = ($_POST['reponse8']);
$_SESSION['rep1'];
$_SESSION['rep2'];
$_SESSION['rep3'];
$_SESSION['rep4'];
$_SESSION['rep5'];
$_SESSION['rep6'];
$_SESSION['rep7'];

?>

<!DOCTYPE html>
<html class="html1">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tester mon amour</title>
   <link rel="stylesheet" href="stylep1.css">
<!-- navbar -->
<nav>
   <ul>
      <li><a href="#" class="btn">Listixar</a></li>
     
    </ul>
  </nav>
 </head>
   <body class="bodyMaman">
<div class="full-screen">

    <form action="page10.php" method="post">
    <h2 class="page">Serais-tu prê(e) à voyager loin pour le/la rejoindre ?</h2>
    <p class="p1">A : Ça dépend de la ville ou il/elle est</br>B : Non, ce serait trop dur de quitter toute ma vie ici</br>C : Oui, je ferais tout pour être à ses côtés</br>D : Oui, quand on aime, on fait des compromis</br> <input class="input1" type="text" placeholder="Ex : A" name="reponse9" />

        <input type="submit" value="Valider" maxlength="1"/>
    </p>


</div>
  </body>
</html>
