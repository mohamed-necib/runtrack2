<!-- JOB03
Développez un algorithme qui affiche le nombre d’arguments $_POST.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple : -->

<?php

$count = 0;
foreach($_POST as $key => $value){
  $count++;
}


?>

<form action="index.php" method="post" name="formulaire">

 <br/><input type="text" placeholder="prenom" name="prenom" value="">
  
  <input type="text" placeholder="nom" name="nom" value="">
  
  <input type="text" placeholder="age" name="age" value="">

  <input type="submit" value="Envoyer">

</form>

<p>Le nombre d'argument POST envoyé est : <?php echo $count ?></p>

