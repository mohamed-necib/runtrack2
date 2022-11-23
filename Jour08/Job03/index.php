<!-- Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->


<?php
session_start();

if (isset($_POST['reset'])) {
  $_SESSION['prenom'] = [];
}

//Condition d'intialisation ==> Si Session ne contient pas prénom, alors on créé un tableau prénom qui ne contient rien.

if (!isset($_SESSION['prenom'])) {
  $_SESSION['prenom'] = [];
}

if (isset($_POST['name'])) {
  if (isset($_SESSION['prenom'])) {
    echo "<ol>";
    $_SESSION['prenom'][] = $_POST['name'];
    foreach ($_SESSION['prenom'] as $item) {
      echo "<li> $item </li>";
    }
  }
  echo "</ol>";
}


//var_dump($_SESSION);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compteur(Session style)</title>
</head>

<body>
  <form method="post">
    <input type="text" name="name" placeholder="prenom">
    <input class="button" type="submit" name="Envoyer">
  </form>
  <form method="post">
    <input type="submit" name="reset" class="button" value="reset">
  </form>
</body>

</html>