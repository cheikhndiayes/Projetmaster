<?php
session_start();
$_SESSION['rep1'];
$_SESSION['rep2'];
$_SESSION['rep10']= ($_POST['reponse10']);
$_SESSION['rep3'];
$_SESSION['rep4'];
$_SESSION['rep5'];
$_SESSION['rep6'];
$_SESSION['rep7'];
$_SESSION['rep8'];
$_SESSION['rep9'];

$total;
?>

<!DOCTYPE html>
<html class="html1">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tester mon amour</title>
   <link rel="stylesheet" href="styleoper.css">

<!-- navbar -->
<nav>
   <ul>
<li><a href="#" class="btn">Listixar</a></li>
      <li><a href="#" class="btn">Recommencer</a></li>
     
    </ul>
  </nav>

 </head>
   <body class="bodyMaman">
     

<p>
   <?php
    if($_SESSION['rep1']==='A' || $_SESSION['rep1']==='a'){
      $total = 30;
    }elseif ($_SESSION['rep1']==='B' || $_SESSION['rep1']==='b') {
      $total = 20;
    }elseif ($_SESSION['rep1']==='C' || $_SESSION['rep1']==='c') {
      $total = 00;
    }elseif ($_SESSION['rep1']==='D' || $_SESSION['rep1']==='d') {
      $total = 10;
    }else {
      echo "ERREUR de réponse à la question 1";
    }
    ?>
</p>
<p>
   <?php
    if($_SESSION['rep2']==='A' || $_SESSION['rep2']==='a'){
      $total += 30;
    }elseif ($_SESSION['rep2']==='B' || $_SESSION['rep2']==='b') {
      $total += 10;
    }elseif ($_SESSION['rep2']==='C' || $_SESSION['rep2']==='c') {
      $total += 20;
    }elseif ($_SESSION['rep2']==='D' || $_SESSION['rep2']==='d') {
      $total += 00;
    }else {
      echo "ERREUR de réponse à la question 2";
    }
    ?>
</p>
<p>
   <?php
    if($_SESSION['rep3']==='A' || $_SESSION['rep3']==='a'){
      $total += 20;
    }elseif ($_SESSION['rep3']==='B' || $_SESSION['rep3']==='b') {
      $total += 30;
    }elseif ($_SESSION['rep3']==='C' || $_SESSION['rep3']==='c') {
      $total += 10;
    }elseif ($_SESSION['rep3']==='D' || $_SESSION['rep3']==='d') {
      $total += 00;
    }else {
      echo "ERREUR de réponse à la question 3";
    }
    ?>
</p>
<p>
   <?php
    if($_SESSION['rep4']==='A' || $_SESSION['rep4']==='a'){
      $total += 10;
    }elseif ($_SESSION['rep4']==='B' || $_SESSION['rep4']==='b') {
      $total += 30;
    }elseif ($_SESSION['rep4']==='C' || $_SESSION['rep4']==='c') {
      $total += 20;
    }elseif ($_SESSION['rep4']==='D' || $_SESSION['rep4']==='d') {
      $total += 00;
    }else {
      echo "ERREUR de réponse à la question 4";
    }
    ?>
</p>
<p>
   <?php
    if($_SESSION['rep5']==='A' || $_SESSION['rep5']==='a'){
      $total += 20;
    }elseif ($_SESSION['rep5']==='B' || $_SESSION['rep5']==='b') {
      $total += 10;
    }elseif ($_SESSION['rep5']==='C' || $_SESSION['rep5']==='c') {
      $total += 00;
    }elseif ($_SESSION['rep5']==='D' || $_SESSION['rep5']==='d') {
      $total += 30;
    }else {
      echo "ERREUR de réponse à la question 5";
    }
    ?>
</p>
<p>
   <?php
    if($_SESSION['rep6']==='A' || $_SESSION['rep6']==='a'){
      $total += 30;
    }elseif ($_SESSION['rep6']==='B' || $_SESSION['rep6']==='b') {
      $total += 20;
    }elseif ($_SESSION['rep6']==='C' || $_SESSION['rep6']==='c') {
      $total += 10;
    }elseif ($_SESSION['rep6']==='D' || $_SESSION['rep6']==='d') {
      $total += 00;
    }else {
      echo "ERREUR de réponse à la question 6";
    }
    ?>
</p>
<p>
   <?php
    if($_SESSION['rep7']==='A' || $_SESSION['rep7']==='a'){
      $total += 20;
    }elseif ($_SESSION['rep7']==='B' || $_SESSION['rep7']==='b') {
      $total += 30;
    }elseif ($_SESSION['rep7']==='C' || $_SESSION['rep7']==='c') {
      $total += 10;
    }elseif ($_SESSION['rep7']==='D' || $_SESSION['rep7']==='d') {
      $total += 00;
    }else {
      echo "ERREUR de réponse à la question 7";
    }
    ?>
</p>
<p>
   <?php
    if($_SESSION['rep8']==='A' || $_SESSION['rep8']==='a'){
      $total += 30;
    }elseif ($_SESSION['rep8']==='B' || $_SESSION['rep8']==='b') {
      $total += 00;
    }elseif ($_SESSION['rep8']==='C' || $_SESSION['rep8']==='c') {
      $total += 10;
    }elseif ($_SESSION['rep8']==='D' || $_SESSION['rep8']==='d') {
      $total += 20;
    }else {
      echo "ERREUR de réponse à la question 8";
    }
    ?>
</p>
<p>
   <?php
    if($_SESSION['rep9']==='A' || $_SESSION['rep9']==='a'){
      $total += 10;
    }elseif ($_SESSION['rep9']==='B' || $_SESSION['rep9']==='b') {
      $total += 00;
    }elseif ($_SESSION['rep9']==='C' || $_SESSION['rep9']==='c') {
      $total += 30;
    }elseif ($_SESSION['rep9']==='D' || $_SESSION['rep9']==='d') {
      $total += 20;
    }else {
      echo "ERREUR de réponse à la question 9";
    }
    ?>
</p>
<p>
   <?php
    if($_SESSION['rep10']==='A' || $_SESSION['rep10']==='a'){
      $total += 30;
    }elseif ($_SESSION['rep10']==='B' || $_SESSION['rep10']==='b') {
      $total += 20;
    }elseif ($_SESSION['rep10']==='C' || $_SESSION['rep10']==='c') {
      $total += 00;
    }elseif ($_SESSION['rep10']==='D' || $_SESSION['rep10']==='d') {
      $total += 10;
    }else {
      echo "ERREUR de réponse à la question 10";
    }
    ?>
</p>

<div class="full-screen">
  <p class="pO">
    <?php
     if ($total >= 0 && $total <= 60) {
       echo "<p>Pas du tout amoureux ou amoureuse</br>Tu penses peut-être que tu l'es mais tes gestes et actions montrent que tu t'efforces de l'être !<br>Mais ne t'inquiète pas, le moment n'est pas encore venu mais un jour, tu rencontreras la bonne personne</p>";
     }elseif ($total >= 70 && $total <= 150) {
       echo "<p> Pas vraiment amoureux ou amoureuse ! Tu ressens un petit quelque chose et il pourrait y avoir de bien meilleurs résultats, Essaie de passer beaucoup plus de temps avec lui/elle et done toujours le meilleur de toi-même et tu verras s'il/elle ressent la même chose. Seul le temps peut dire à quel point vous pourriez aller.</p>";
     }elseif ($total >= 160 && $total <= 240) {
       echo "<p>Tu es amoureux ou amoureuse</br>Tu es bien amoureux ou amoureuse et tu l'aimes de tout ton coeur, ton corps et ton être. Tu l'aimes vraiment sans te perdre et sans essayer de devenir quelqu'un d'autre.</br>Pour ton cas, tu as toutes les chances que ça dure entre vous deux et vous pourriez bâtir une relation solide.</br>Continues de savourer chaque moment ensemble.</p>";
     }elseif ($total >= 250 && $total <= 300) {
       echo "<p>Tu es éperduement amoureux ou amoureuse !</br>Tu l'aimes éperdument... et tu l'aimes peut-être même plus que toi-même ! Mais attention, tu pourrais te perdre dans les nuages; être éperdument amoureux ou amoureuse est une merveilleuse sensation mais tu dois garder les pieds sur terre.</br>Ne te laisse pas trop emporter par l'amour et le coeur, ne perds jamais la tête et souviens-toi de ce-ci : l'excès d'amour peut entrainer la haine, jalousie, tristesse et colère ... comme il peut apporter joie et bonheur.</p>";
     }else {
       echo "Erreur recommencer avec les bonnes reponse !";
     }
    ?>
  </p>
</div>


</body>
</html>
