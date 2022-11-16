<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “Les choses que l'on possède finissent par nous posséder."
// Créez un algorithme qui parcourt et écrit cette chaine à l’envers.

$str = "Les choses que l'on possede finissent par nous posseder.";

$strLength = 0;

for($i = 0; isset($str[$i]); $i++){
  $strLength++;
}

for($i = -1; isset($str[$i]); $i--){
  echo $str[$i];
}
?>