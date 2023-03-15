<?php
session_start();
$_SESSION['rep7'] = ($_POST['reponse7']);
$_SESSION['rep1'];
$_SESSION['rep2'];
$_SESSION['rep3'];
$_SESSION['rep4'];
$_SESSION['rep5'];
$_SESSION['rep6'];

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
    <form action="page9.php" method="post">
    <h2 class="page">Changerais-tu quelque chose à propos de toi pour qu'il/elle t'aime plus ?</h2>
    <p class="p1">A : Oui, je ferais tout pour lui/elle</br>B : Non, il/elle doit m'aimer comme je suis</br>C : Si c'est bénéfique pour moi aussi</br>D : Ça dépend du changement que ça va apporter dans notre relation</br> <input class="input1" type="text" placeholder="Ex : A" name="reponse8" />

        <input type="submit" value="Valider" maxlength="1"/>
    </p>

</div>
  </body>
</html>
