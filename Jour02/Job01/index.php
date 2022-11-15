<?php

echo "Voici la liste des nombres compris entre 0 et 1337 :";
echo "<br/>";
  for ($i=0;$i<=1337;$i++){
  if ($i==42){
      echo "=======> <b><u>$i</u></b>";
      echo "<br/>";
  }else{
      echo"$i";
       echo"<br/>";
}
}
?>