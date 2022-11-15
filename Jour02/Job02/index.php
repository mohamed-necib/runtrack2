<?php

// Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
// mettant un retour à la ligne entre chaque nombre (<br />).


echo "Il manque certains nombres:";
echo "<br>";
for ($i = 0; $i <= 1337; $i++){
  switch ($i) {
    case 26:
        echo "=========> ICI <br> ";
        break;
    case 37:
        echo "=========> ICI <br> ";
        break;
    case 88:
        echo "=========> ICI <br> ";
        break;
    case 1111:
        echo "=========> Et ICI <br> ";
        break;
    default:
        echo "$i <br>";
}
}

?>