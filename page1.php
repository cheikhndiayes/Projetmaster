<?php
session_start();
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
     <form action="page2.php" method="post">
     <h2 class="page">1</br>Tu penses à lui/elle ?</h2>
     <p class="p1">
       A : Tout le temps.</br>B : La plupart du temps.<br>C : Seulement quand je dois penser à lui/elle.<br>D : Des fois oui !
       <br> <input class="input1" type="text" placeholder="Ex : A" name="reponse1" maxlength="1"/>

         <input type="submit" value="Valider" />
     </p>
</div>

</section>
  </body>
</html>


