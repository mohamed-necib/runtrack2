<?php

// Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
// à la ligne entre chaque nombre (“<br />”). Divisible par un et lui même.



// $numb = 1;
// $nb_max = 1000;

// while ($numb <= $nb_max) {
//   if ($numb == 1) {
//   echo "{$numb} n'est pas un nombre premier<br>";
//   $numb++;
//   continue;
//   }
// $a = 0;
//   for ($i=2; $i<$numb; $i++){
//      On divise $numb par $i qui prend la valeur de tous les nombres, de 2 à $numb
//     if (is_int($numb/$i)){
//     Si $numb/$i est un entier on interrompt le traitement de la boucle car $numb est divisible par $i
//     $a++;
//     echo "{$numb} n'est pas un nombre premier<br>";
//     break;
//     }
//   }
// if ($a == 0) echo "<b>{$numb} est un nombre premier</b><br>";
// $numb++;
// }

for ($i=2;$i<=1000;$i++){
  $counter=0;
  for($j=2; $j<$i;$j++){
    if($i%$j==0){
      $counter++;
    }
  }
  if ($counter == 0) {
    echo "$i est un nombre premier<br>";
  }
  

}


?>