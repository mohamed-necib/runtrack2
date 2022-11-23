<!-- Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

setcookie('nbvisites', '0', time() + 3600);

if (isset($_POST['reset'])){
  $_COOKIE['nbvisites'] = 0;
}

if (isset($_COOKIE['nbvisites'])){
  $newNbVisites = ($_COOKIE['nbvisites'] +1);
  setcookie('nbvisites', $newNbVisites, time() + 3600);
}else{
  $_COOKIE['nbvisites'] =1;
}







?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compteur(Cookie style)</title>
</head>

<body>
  <h1>Vous vous êtes connecté <?php echo $_COOKIE['nbvisites'] ?> fois</h1>
  <form method="post">
    <input type="submit" name="reset" class="button" value="reset" />
</body>

</html>