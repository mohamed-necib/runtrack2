<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez le prénom, le nom et la date de naissance des étudiants qui sont nés
entre 1998 et 2018. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données. -->

<?php

$mysqli = new mysqli("localhost", "root", "root", "jour09");

$request = $mysqli->query ("SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'");

$result_fetch_all = $request->fetch_all();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job12</title>
</head>

<body>
  <style type="text/css">
    .titre th {
      width: 100%;
      font-size: 12px;
      background-color: #e6983b;
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #ebab3a;
      text-align: center;
    }

    .tftable {
      font-size: 12px;
      color: #333333;
      width: 50%;
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
      background-color: #ffffff;
    }
  </style>
  <!-- <table class="tftable" border="1">
    <tr>
      <th class="titre"></th>
    </tr> -->
    <table class="tftable" border="1">
      <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Date de Naissance</th>
      </tr>
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