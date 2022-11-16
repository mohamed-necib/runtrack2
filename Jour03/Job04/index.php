<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “Dans l'espace, personne ne vous entend crier”.
// Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
// dans cette chaîne.

$str = "Dans l'espace, personne ne vous entend crier";

$nb=0;

for($i=0; isset($str[$i]); $i++){
     $nb++;
};
 
echo "Le nombre de caractères présent dans la phrase est: $nb";

?>