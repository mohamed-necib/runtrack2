<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. -->

<form action="index.php" method="get" name="formulaire">

<br/><input type="text" placeholder="number" name="number" value="">
  
<input type="submit" value="Envoyer">

</form>

<?php

if($_GET){
  switch($_GET['number']){
    case($_GET['number'] %2 == 0):
      echo $_GET['number'].' '.'est un nombre pair';
      break;
    case($_GET['number'] %2 != 0):
      echo $_GET['number'].' '.'est un nombre impair';
      break;
  }
}
?>