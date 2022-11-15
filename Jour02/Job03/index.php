<?php

// Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre
// (<br />).
// Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25
// et 50 : souligner.
// Afficher “La Plateforme_” à la place de 42.

for ($i = 0; $i <= 100; $i++){

  $ita = "<i>$i</i><br>";
  $soul ="<u>$i</u><br>";

  switch($i){
    case 42:
      echo "La Plateforme<br>";
      break;
    case ($i > 0 && $i <= 20): 
      echo $ita;
      break;
    case ($i >= 25 && $i <= 50):
      echo $soul;
      break;
    default:
      echo "$i<br>";
  }

}

?>