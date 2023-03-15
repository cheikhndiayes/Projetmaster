<?php
session_start();
$_SESSION['prenomEnfant'] = ($_POST['prenom2']);
$_SESSION['nomEnfant'] = ($_POST['nom2']);
$setp = 7
?>

<!DOCTYPE html>
<html class="htmlResltat">
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta charset="utf-8">
    <title>Listixar</title>
    
    <link rel="stylesheet" href="style.css" >

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
</head>
<body>
<!-- header -->
 <header>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans">
<!-- navbar -->
<nav>
   <ul>
      <li><a href="#" class="btn">Test de compatibilite</a></li>
        <li><a href="#" class="btn">Recommencer</a></li>
     
    </ul>
  </nav>
   
<!-- logo -->
    
<!-- title & content -->
    <section class="header-content">

<div class="choix">
       
      
<?php
$nombre = strlen($_SESSION['prenom'])+strlen($_SESSION['nom'])+strlen($_SESSION['prenomEnfant'])+strlen($_SESSION['nomEnfant']);

$total = ($nombre+$setp)%9;




if (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 1) {
    echo "<h1>".$_SESSION  ['prenomEnfant']." & ".$_SESSION['nomEnfant']."</h1> Stagnant, c'est le mot qui caractérise votre union.</br>Ce mariage ne sera ni avantageux ni désavantageux pour les deux partenaires.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 2) {
 echo "<h1>".$_SESSION['prenomEnfant']." & ".$_SESSION['nomEnfant']."</h1> Ça vaut la peine d'attendre !</br> Cette phrase résume parfaitement votre union.</br> Vous aurez une longue et dure phase de séduction mais une fois mariés,</br>la vie vous serait très abondante.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 3) {
  echo "<h1>".$_SESSION['prenomEnfant']." & ".$_SESSION['nomEnfant']."</h1>Attention au risque de tout perdre !</br>Ce mariage ruinera économiquement l'un des partenaires.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 4) {
  echo "<h1>".$_SESSION['prenomEnfant']." & ".$_SESSION['nomEnfant']."</h1>L'hôpital sera votre chambre conjugale !</br>Vous aurez un mariage dont vous vous ne cesserez de tomber malade</br>l'un après l'autre.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 5) {
  echo "<h1>".$_SESSION['prenomEnfant']." & ".$_SESSION['nomEnfant']."</h1>Tous les feux sont au vert !</br>Bonheur, réussite, abondance sont les mots qui caractérisent ce mariage.</br>Cet union sera joyeux et bénéfique.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 6) {
  echo "<h1>".$_SESSION['prenomEnfant']." & ".$_SESSION['nomEnfant']."</h1>C'est le grand chaos !</br>Votre liaison sera très mouvementée et instable mais vous finirez toujours</br> par se retrouver.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 7) {
  echo "<h1>".$_SESSION['prenomEnfant']." & ".$_SESSION['nomEnfant']."</h1>C'est le jackpot !</br>Vous aurez un mariage que tout couple aimeriait avoir.</br> Un union de rêve qui attirera tous les regards pour sa réussite et les bonheur infini</br> qu'il apporte aux deux partenaires.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 8) {
  echo "<h1>".$_SESSION['prenomEnfant']." & ".$_SESSION['nomEnfant']."</h1>Allez jusqu'au bout!</br>Vous aurez une Phase de séduction difficile mais un mariage heureux et réussi.";
}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 9) {
  echo "<h1>".$_SESSION['prenomEnfant']." & ".$_SESSION['nomEnfant']."</h1>Un mariage noir !</br>La séparation est certaine. Vous aurez un divorce ou l’un des partenaires y laissera sa vie.";

}elseif (!(preg_match('/[0-9]/', $_SESSION['prenom'])) && !(preg_match('/[0-9]/', $_SESSION['nom'])) && !(preg_match('/[0-9]/', $_SESSION['prenomEnfant'])) && !(preg_match('/[0-9]/', $_SESSION['nomEnfant'])) && $total == 0) {
  echo "<h1>".$_SESSION['prenomEnfant']." & ".$_SESSION['nomEnfant']."</h1>Une liaison éphémère !</br>Vous n'allez pas vous marier ou vous allez vous divorcer dans les jours à venir.";

}else {
  echo "Oops ! Recommencer</br>Vous n'avez pas bien fourni les bons prénoms !";
}




?>

</div>





<button class="button" onclick="window.location.href = 'whatsapp://send?text=https://www.facebook.com/sharer/sharer.php?u=https%3A//www.teledakar.net/2021/09/07/touba-date-magal-de-touba-connue/';">WhatsApp</button>

<button class="button" onclick="window.location.href = 'https://www.facebook.com/sharer/sharer.php?u=https%3A//www.teledakar.net/2021/09/07/touba-date-magal-de-touba-connue/';" target="_blank">Facebook</button>

<?php // Finalement, on détruit la session.
session_destroy(); ?>
    </section>


</header>







</body>

</html>

