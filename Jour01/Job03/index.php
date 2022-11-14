<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tableau des Types de Variables</title>
</head>
<body>
  <?php
  
  // Déclaration des variables

  $str = "Hello";
  $int = 9;
  $flo = 2.5;
  $bool = true;
  $null = null;

  ?>

  <!-- Mise en page CSS -->

<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #F0AA54;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#F0AA54;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

  <!-- Tableau des Types de Variables -->

<table class="tftable" border="1">
<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>
<tr><td>String ou Chaîne de caractères</td><td>str</td><td><?php echo $str ?></td></tr>
<tr><td>Integer ou Entier</td><td>int</td><td><?php echo $int ?></td></tr>
<tr><td>Float ou Nombre à virgule</td><td>flo</td><td><?php echo $flo ?></td></tr>
<tr><td>Boolean ou Booléen</td><td>bool</td><td><?php echo $bool ?></td></tr>
<tr><td>Null</td><td>null</td><td><?php echo $null ?></td></tr>
</table>

</body>
</html>