<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphique D3.js</title>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="../js/graphique.js" ></script>
    <script src="../js/graphique.js" defer></script>
    <link rel="stylesheet" href="../css/style-graphique.css">
</head>
<br>


<h1>Tableau de la répartition des adhérents dans les lieux de vie</h1>
<table>
    <thead>
    <tr>
        <th>Lieu de vie</th>
        <th>Nombre total</th>
        <th>Pourcentage</th>

    </tr>
    </thead>
    <tbody id="lieuDevieTable"></tbody>
    <tfoot>
    <tr>
        <td><strong>Total</strong></td>
        <td id="totalLieuDeVie"></td>
        <td><strong>100%</strong></td>
    </tr>
    </tfoot>
</table>
<h1>Age moyen des adhérents par activité scolaire ou professionnelle</h1>
<table>
    <thead>
    <tr>
        <th>Activité scolaire ou professionnelle</th>
        <th>Âge Moyen</th>

    </tr>
    </thead>
    <tbody id="ageMoyenActivite"></tbody>

</table>
    <h1>Pourcentage d'adhérents ayant besoin de soutien</h1>
<div id="chart"></div>
<table id ="autonomieTable">
    <thead>
    <tr>
        <th>Besoin de soutien</th>
    </tr>
    </thead>
    <tbody id="autonomie"></tbody>
</table>
<h1>Nombre d'adhérents par types de qualité de vie </h1>
    <div id="qualiterdevie"></div>

<a href="../PHP/espace_admin.php"><button id="buttonretour">Retour</button></a>
</body>
</html>