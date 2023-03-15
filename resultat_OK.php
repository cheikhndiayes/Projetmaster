<?php
session_start();
$_SESSION['prenomEnfant'] = ($_POST['prenom2']);
$_SESSION['nomEnfant'] = ($_POST['nom2']);
$setp = 7

?>
<!DOCTYPE html>
<html class="htmlResltat">
  <head>
    <meta charset="utf-8">
    <title>Listixar</title>
    
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    


  </head>
  <body class="bodyResultat">

    <div class="bntListAide">
       <button class="myButton3" onclick="window.location.href = 'index.php';">LISTIXAR</button>
       <button class="myButton4" onclick="window.location.href = 'index.php';">Aidez-Moi</button>

<!-- Background & animion & navbar & title -->
<div class="container-fluid">
<!-- Background animtion-->
<div class="background">
   <div class="cube"></div>
   <div class="cube"></div>
   <div class="cube"></div>
   <div class="cube"></div>
  <div class="cube"></div>
</div>
    </div>





    <div class="div1">
      <p class="p1">

<?php

$nombre = strlen($_SESSION['prenom'])+strlen($_SESSION['nom'])+strlen($_SESSION['prenomEnfant'])+strlen($_SESSION['nomEnfant']);

$total = ($nombre+$setp)%9;




if (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 1) {
  echo $_SESSION['prenomEnfant']." et ".$_SESSION['nomEnfant']." vous aurez un mariage qui n’est ni avantageux ni desavangeux";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 2) {
  echo $_SESSION['prenomEnfant']." et ".$_SESSION['nomEnfant']." vous aurez un longue et dure phase pendant la séduction mais une fois mariés, la vie vous sera tres abondante.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 3) {
  echo $_SESSION['prenomEnfant']." et ".$_SESSION['nomEnfant']." vous aurez un mariage qui va ruiner le marié economiquement.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 4) {
  echo $_SESSION['prenomEnfant']." et ".$_SESSION['nomEnfant']." vous aurez un mariage dont les partenaires ne cessent de tomber malade.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 5) {
  echo $_SESSION['prenomEnfant']." et ".$_SESSION['nomEnfant']." vous aurez un mariage tres abondant, reussite et un bonheur infini.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 6) {
  echo $_SESSION['prenomEnfant']." et ".$_SESSION['nomEnfant']." vous aurez un mariage tres chaotique mais ne se separe jamais";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 7) {
  echo $_SESSION['prenomEnfant']." et ".$_SESSION['nomEnfant']." vous aurez un mariage que tout couple aimerait avoir.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 8) {
  echo $_SESSION['prenomEnfant']." et ".$_SESSION['nomEnfant']." vous aurez une Phase de seduction difficile mais un mariage heureux";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 9) {
  echo $_SESSION['prenomEnfant']." et ".$_SESSION['nomEnfant']." vous aurez un divorce ou l’un des mariés mourira.";

}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 0) {
  echo $_SESSION['prenomEnfant']." et ".$_SESSION['nomEnfant']." vous n'allez pas vous marier ou vous allez divorcer dans les jours à venir.";

}else {
  echo "Recommencer, vous n'avez pas bien fourni les bons noms !";
}



?>
</p>
</div>

<div class="bntSocial">

<button class="myButton1" onclick="window.location.href = 'https://www.facebook.com/sharer/sharer.php?u=https%3A//www.teledakar.net/2021/09/07/touba-date-magal-de-touba-connue/';" target="_blank">Partager sur Facebook</button>
<button class="myButton2" onclick="window.location.href = 'whatsapp://send?text=https://www.facebook.com/sharer/sharer.php?u=https%3A//www.teledakar.net/2021/09/07/touba-date-magal-de-touba-connue/';">Partager sur Whatsapp</button>

</div>
<?php // Finalement, on détruit la session.
session_destroy(); ?>
  </body>
</html>
