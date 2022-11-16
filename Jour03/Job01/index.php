<?php

// Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
// Parcourez ce tableau et affichez pour chaque nombre “X est pair<br />” ou “X est
// impaire<br />”, sur votre page index.php. X prenant tour à tour chacune des valeurs
// comprises dans ce tableau.

$myNumbs = [200, 204, 173, 98, 171, 404, 459];

foreach($myNumbs as $myNumb){
  if($myNumb % 2 == 0){
    echo $myNumb.' est pair<br/>';
  }else{
    echo $myNumb.' est impair<br/>';
  };
};

?>

