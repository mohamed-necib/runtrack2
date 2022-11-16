<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “Certaines choses changent, et d'autres ne changeront jamais.”
// Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
// deuxième, le deuxième par le troisième etc.. et le dernier par le premier.

$str = "Certaines choses changent, et d'autres ne changeront jamais.";


// $dic_maj = [
//   'majuscules' => ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
//   'minuscules' => [ 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']
// ];


$modif_str = "";


for($i = 0; isset($str[$i]); $i++){
    if(!isset($str[$i+1])){
      $modif_str = $modif_str.$str[0];
    }
    else{
      $modif_str = $modif_str.$str[$i+1];
    }

}

echo $modif_str;



?>