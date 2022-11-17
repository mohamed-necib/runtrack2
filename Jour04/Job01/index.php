<!-- JOB01
Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “ -->

<?php

$count = 0;
foreach($_GET as $key => $value){
  $count++;
}


?>

<form action="index.php" method="get" name="formulaire">
  Prénom :<input type="text" name="prenom" value="">
  <br>
  Nom :<input type="text" name="nom" value="">
  <br>
  Age :<input type="text" name="age" value="">
  <br>
  <input type="submit" value="Envoyer">

</form>

<p>Le nombre d'argument GET envoyé est : <?php echo $count ?></p>
