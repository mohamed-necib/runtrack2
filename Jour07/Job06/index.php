<!-- Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
qu’elle doit la modifier de sorte à ce que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules). -->

<?php

// function leetSpeak($str){

//   for ($i=0; isset($str[$i]) ; $i++) { 
//     switch($str[$i]){
//       case "a":
//       case "A":
//         $str[$i] = "4";
//         break;
//       case "b":
//       case "B":
//         $str[$i] = "8";
//         break;
//       case "e":
//       case "E":
//         $str[$i] = "3";
//         break;
//       case "g":
//       case "G":
//         $str[$i] = "6";
//         break;
//       case "l":
//       case "L":
//         $str[$i] = "1";
//         break;
//       case "s":
//       case "S":
//         $str[$i] = "5";
//         break;
//       case "t":
//       case "T":
//         $str[$i] = "7";
//         break;
//     }
//   }
//   return $str;
// }

// echo leetSpeak("Ableton");

function leetSpeak($str)
{

  $array = [
    '4' => ['a', 'A'],
    '8' => ['b', 'B'],
    '3' => ['e', 'E'],
    '6' => ['g', 'G'],
    '1' => ['l', 'L'],
    '5' => ['s', 'S'],
    '7' => ['t', 'T']
  ];

  for ($i = 0; isset($str[$i]); $i++) {

    foreach ($array as $item => $char) {

      if ($str[$i] === $char[0] || $str[$i] === $char[1]) {
        $str[$i] = $item;
      }
    }
  }
  return $str;
}



echo leetSpeak('Ablation');
