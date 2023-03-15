<?php
session_start();
$_SESSION['prenom'] = ($_POST['prenom1']);
$_SESSION['nom'] = ($_POST['nom1']);

?>
<!DOCTYPE html>
<html class="htmlEnfant">
  <head>
    <meta charset="utf-8">
    
    <title>Listixar</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/less" type="text/css" href="enfant.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    <script src="enfant.js"></script>
  </head>
  <body>
<div class="wrapper">
  <div class="container">
    <h1>Vos prénoms</h1>
    
    <form action="resultat.php" method="post">
      Le prenom du copain : <input type="text" placeholder="Ex : Moussa" name="prenom2" />
      Le prenom de la copine : <input type="text" placeholder="Ex : Aminata" name="nom2" />
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
