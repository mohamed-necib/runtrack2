<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “On n’est pas le meilleur quand on le croit mais quand on le sait”.
// Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
// “consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
// nombre d'occurrences de consonnes et de voyelles de $str.
// Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
// “Consonnes”..


$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
 'consonnes' =>  ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P","Q", "R", "S", "T", "V", "W", "X", "Z"],
 'voyelles' =>  ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y']
       ] ;

$countVoy = 0;
$countCons = 0;
     
       for($i = 0; isset($str[$i]); $i++){
              foreach($dic['voyelles'] as $voyelle){
                if($str[$i] === $voyelle){
                  $countVoy++;
                  
                }
              }
              foreach($dic['consonnes'] as $consonne){
                if($str[$i] === $consonne){
                  $countCons++;
              
                }
              }
            }          
?>

<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="2">
<tr><th>Consonnes</th><th>Voyelles</th></tr>
<td><?php echo $countCons?></td>
<td><?php echo $countVoy?></td>
</table>


       