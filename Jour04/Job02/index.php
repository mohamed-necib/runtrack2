<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_GET et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre tableau : -->

<form action="index.php" method="get" name="formulaire">
<br/><input type="text" placeholder="Prenom" name="prenom" value="">
  
<input type="text" placeholder="Nom" name="nom" value="">
  
<input type="text" placeholder="Age" name="age" value="" >
  
<input type="submit" value="Envoyer">

</form>



<?php
if($_GET){
  echo "
  <style type='text/css'>
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #ebab3a;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#e6983b;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;text-align:left;}
.tftable tr {background-color:#f0c169;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;}
.tftable tr:hover {background-color:#ffffff;}
</style>
  <table class='tftable' border='1'>
  <thead>
      <tr>
          <td>Argument</td>
          <td>Valeur</td>
      </tr>
  </thead>
  <tbody>";

  foreach($_GET as $key => $value){
      echo "<tr>
              <td>$key</td>
              <td>$value</td>
          </tr>";
  }
  echo "</tbody></table>";
}


?>





