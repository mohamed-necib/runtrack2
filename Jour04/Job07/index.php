<!-- Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci :
Si on entre les valeurs largeur = 20 et hauteur = 10 dans les champs,
la maison qui s’affiche sur la page doit ressembler à ceci : -->


<!-- FORMULAIRE -->

<form action="index.php" method="get" name="formulaire">

<br/><input type="text" placeholder="largeur" name="largeur" value="">
<input type="text" placeholder="hauteur" name="hauteur" value="">
  
<input type="submit" value="Envoyer">

</form>




<pre>
<?php

// Initialisation de la page

if ($_GET){
  //Boucle permettant l'affichage du toit
    for($i=0; $i <= ($_GET["largeur"]/2); $i++){
        // Boucle permettant l'espacement entres les "/"
        for ($s = 0; $s <= (($_GET["largeur"]/2) - $i-1); $s++){
            echo "&nbsp;";
        }
        echo "/";

        // Boucle permettant l'affichage des underscores du toit "_"
        for ($u = 1; $u <= ($i*2) ; $u++){
            echo "_";
        }
        echo "\<br/>";
    }
  }

  // Boucle permettant l'affichage du bas de la maison
  for($i=1; $i <= ($_GET["hauteur"]); $i++){
    echo "|";
    if ($i == $_GET["hauteur"]){
        // Boucle pour le sol de la maison
        for ($j=1; $j <= ($_GET["largeur"]); $j++){
            echo "_";
        }
    }
    else{
        // Boucle d'espacement des murs
        for ($j=1; $j <= ($_GET["largeur"]); $j++){
            echo "&nbsp;";
        }
    }

    echo "|<br/>";
}


?>
</pre>