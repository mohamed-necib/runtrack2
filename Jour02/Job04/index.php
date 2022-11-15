<?php

// Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
// (“<br />”) et en remplaçant certains nombres par un mot selon les conditions suivantes :
// ● Si le nombre est un multiple de 3, affichez “Fizz”.
// ● Si le nombre est un multiple de 5, affichez “Buzz”.
// ● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.

// <======== Avec SWITCH ========>

// for ($i = 1; $i <= 100; $i++){
//   switch($i){
//     case ($i%3 == 0 && $i%5 == 0):
//       echo "FizzBuzz<br>";
//       break;
//     case ($i % 3 == 0): 
//       echo "Fizz<br>";
//       break;
//     case ($i % 5 == 0):
//       echo "Buzz<br>";
//       break;
//     default:
//       echo "$i<br>";
//   }
// }

// <======= Avec IF ========>

for ($i = 1; $i <= 100; $i++){
  if($i % 3 == 0 && $i % 5 == 0){
    echo "FizzBuzz<br>";
  }else if($i % 3 == 0){
    echo "Fizz<br>";
  }else if($i % 5 == 0){
    echo "Buzz<br>";
  }else{
    echo "$i<br>";
  }  
}
?>

