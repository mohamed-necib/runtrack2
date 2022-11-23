<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

session_start();


if (isset($_POST['reset'])) {
  $_SESSION['nbvisites'] = 0;
}

if (isset($_SESSION['nbvisites'])) {
  $_SESSION['nbvisites']++;
} else {
  $_SESSION['nbvisites'] = 1;
}



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
  <h1>Vous vous êtes connecté <?php echo $_SESSION['nbvisites'] ?> fois</h1>
  <form method="post">
    <input type="submit" name="reset" class="button" value="reset" />
</body>

</html>