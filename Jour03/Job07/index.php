<?php

// Les alphabets pour swap la casse
$lower = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'o', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$upper = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'O', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$modif_str = '';

$str_len = 0;

// Définition de la taille de la chaine de caractères
while (isset($str[$str_len])) {
    $str_len += 1;
}

// On commence à 1 pour ne pas prendre en compte le premier caractère...
for ($i = 1; $i < $str_len; $i++) {
    $modif_str .= $str[$i];
}

// ... puis on place le premier à la fin de la chaîne
$modif_str[$str_len-1] = $str[0];

// La string est maintenant décalée vers la gauche, avec l'ancien premier caractère à la fin !

// Pour toutes les lettres de l'alphabet
for ($i = 0; $i < 26; $i++) {
    //On échange le premier caractère du string par une majuscule...
    if ($modif_str[0] === $lower[$i]) {
        $modif_str[0] = $upper[$i];
    }
    // puis le dernier par une minuscule
    if ($modif_str[-1] === $upper[$i]) {
        $modif_str[-1] = $lower[$i];
    }
}


echo $modif_str;