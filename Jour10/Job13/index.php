<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez récupérer le nom des salles et le nom de leur étage. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
doit contenir le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données. -->

<?php

$mysqli = new mysqli("localhost", "root", "root", "jour09");

$request = $mysqli->query("SELECT salles.nom, etages.nom FROM salles JOIN etages ON etages.id = salles.id_etage");

$result_fetch_all = $request->fetch_all();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job13</title>
</head>

<body>
  <style type="text/css">
    .container{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50%;

    }
    .tftable {
      font-size: 12px;
      color: #333333;
      width: 100%;
      border-width: 1px;
      border-color: #ebab3a;
      border-collapse: collapse;

    }

    .tftable th {
      font-size: 12px;
      background-color: #e6983b;
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #ebab3a;
      text-align: center;
    }

    .tftable tr {
      background-color: #f0c169;
    }

    .tftable td {
      font-size: 12px;
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #ebab3a;
      text-align: center;
    }

    .tftable tr:hover {
      background-color: yellowgreen;
      color: indianred;
    }
  </style>
  <div class="container">
    <table class="tftable" border="1">
      <tr>
        <th>Nom des Salles</th>
        <th>Nom des Etages</th>
      </tr>
  </div>

  <?php
  foreach ($result_fetch_all as $ligne) {
    echo "<tr>";
    foreach ($ligne as $case) {
      echo "<td>" . $case . "</td>";
    }
    echo "</tr>";
  }
  ?>


  </table>

</body>

</html>