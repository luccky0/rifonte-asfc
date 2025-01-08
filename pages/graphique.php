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
    <script src="../js/graphique.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-graphique.css">

</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../pages/accueil.php">
            <img src="../image/logo_asfc2.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../pages/accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.asso-sfc.org/asfc-adhesion.php">Adhésion & Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.asso-sfc.org/asfc-user-login-frm.php">Forum</a>
                </li>
            </ul>
            <div class="header-buttons">
                <a href="../pages/faireundon.php" class="don-btn">Comment faire un don ?</a>
                <a href= "<?php echo isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : 'authentification.php'; ?>" class="adh-btn">Retour</a>
            </div>
        </div>
    </div>
</nav>

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
<footer>
    <a href="#">Liens utiles</a>
    <a href="#">Documentation</a>
    <a href="#">Agenda</a>
    <a href="#">Démarches administratives</a>
    <a href="#">Accueil téléphonique</a>
    <a href="#">Accueil en régions</a>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>