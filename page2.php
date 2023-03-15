<?php
session_start();
$_SESSION['rep1'] = ($_POST['reponse1']);


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
    <form action="page3.php" method="post">
    <h2 class="page">2</br>Aimes-tu penser à lui/elle ?</h2>
    <p class="p1">A : Oui, absolument</br>B : Je ne sais pas</br>C : Des fois oui</br>D : Non, pas vraiment </br><input class="input1" type="text" placeholder="Ex : A" name="reponse2" />

        <input type="submit" value="Valider" maxlength="1"/>
    </p>

</div>
</section>
  </body>
</html>
