<?php
session_start();
?>

<!DOCTYPE html>
<html class="htmlMaman">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listixar</title>
    <link rel="stylesheet/less" type="text/css" href="maman.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    <script src="maman.js"></script>
  </head>
  <body>

    <div class="wrapper">
  <div class="container">
    <h1>Prénoms de vos mamans</h1>
    
    
      <form action="enfant.php" method="post">
      Le prenom de ta maman :<input type="text" placeholder="Ex : Aicha" name="prenom1" />
      Le prenom de sa maman :<input type="text" placeholder="Ex : Fatou" name="nom1" />
      <button type="submit" id="login-button">Valider</button>
    </form>
  </div>
  
  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
   
  </body>
</html>
