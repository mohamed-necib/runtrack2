<?php

// CONSIGNES:
// Créez une variable de type string nommée $str et affectez y le texte :
// “Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
// Parcourir cette chaîne en affichant seulement un caractère sur deux.

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

for($i; isset($str[$i]); $i++){
  if($i%2 == 0){
    echo $str[$i];
  }
}
?>