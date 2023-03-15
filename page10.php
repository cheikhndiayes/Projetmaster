<?php
session_start();
$_SESSION['rep9'] = ($_POST['reponse9']);
$_SESSION['rep1'];
$_SESSION['rep2'];
$_SESSION['rep3'];
$_SESSION['rep4'];
$_SESSION['rep5'];
$_SESSION['rep6'];
$_SESSION['rep7'];
$_SESSION['rep8'];
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

    <form action="pageOperation.php" method="post">
    <h2 class="page">Choisir entre le job de tes rêves ou lui/elle ?</h2>
    <p class="p1">A : Lui/elle, sans hésiter</br>B : C'est dur ... mais lui/elle</br>C : Le boulot de mes rêves</br>D : Je ne peux pas choisir</br> <input class="input1" type="text" placeholder="Ex : A" name="reponse10" />

        <input type="submit" value="Valider" maxlength="1"/>
    </p>
</div>
  </body>
</html>
