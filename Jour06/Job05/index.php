<!-- Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
des effets sur le design du formulaire, la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
doit changer. -->

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Formulaire</title>
</head>
<body>
  <div class="container">
    <div class="box">
      <div class="left"></div>
      <div class="right">
        <form action="" method="POST" class="form">
            <h2>Formulaire</h2>
            <select name="style" id="select-style">
              <option selected value="">Choisissez un style :</option>
              <option <?php echo ($_POST["style"] == "style1") ? "selected" : NULL; ?> value="style1">Style 1</option>
              <option <?php echo ($_POST["style"] == "style2") ? "selected" : NULL; ?> value="style2">Style 2</option>
              <option <?php echo ($_POST["style"] == "style3") ? "selected" : NULL; ?> value="style3">Style 3</option>
            </select>
            <input type="submit" value="Envoyer">
            <p></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>





<?php
//echo $_POST["style"];
$style=$_POST["style"];

echo"<br>";

switch ($style) {
    case "style1":
        
        echo '<link rel="stylesheet" href="style1.css">';
      
        break;
    case "style2":
        
        echo '<link rel="stylesheet" href="style2.css">';
        
        
        break;
    case "style3":
        echo '<link rel="stylesheet" href="style3.css">';
        
        break;
}


?>