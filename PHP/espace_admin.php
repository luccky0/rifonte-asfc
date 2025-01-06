<?php
session_start(); // Démarrer la session pour accéder aux données
try{
    $hasParticipated = false;
    $db = new PDO('sqlite:../data/data.sqlite');
    //verifier si l'utilisateur a déjà répondu au sondage
    $stmt = $db->prepare("SELECT COUNT(*) FROM sondage WHERE idPersonne = :userId");
    $stmt->bindParam(':userId', $_SESSION['user_id']);
    $stmt->execute();
    $count = $stmt->fetchColumn();
} catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }

if ($count > 0) {
    $hasParticipated = true;
}
$_SESSION['hasParticipated'] = $hasParticipated;
$hasParticipated = isset($_SESSION['hasParticipated']) ? $_SESSION['hasParticipated'] : false;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Association Française du Syndrome de Fatigue Chronique</title>
    <script src="../js/animation.js" defer></script>
    <link href="../css/style_espaceadmin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../html/accueil.html">
            <img src="../image/logo_asfc2.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../html/accueil.html">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.asso-sfc.org/asfc-adhesion.php">Adhésion & Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.asso-sfc.org/asfc-user-login-frm.php">Forum</a>
                </li>
            </ul>
            <div class="header-buttons">
                <a href="../html/faireundon.html" class="don-btn">Comment faire un don ?</a>
                <a href="../PHP/authentification.php" class="adh-btn">Espace adhérents</a>
            </div>
        </div>
    </div>
</nav>
<h1><span class="bold">Espace Administrateur</span></h1>
<div id="buttons">
    <div class="sondage">
        <h2>Sondage</h2>
        <p>Répondez à un sondage concernant votre situation (Age, Lieu de vie, Activité scolaire ou professionnelle, Qualité de vie, Besoin de soutien). Ces informations sont collectées dans le but de réaliser des indicateurs. L’objectif de cette enquête est de mieux comprendre les
            besoins et problèmes de nos adhérents. (Attention, vous ne pouvez répondre au questionnaire qu'une seule fois)
        </p>
        <button class="button <?php echo $hasParticipated ? 'disabled' : ''; ?>"
                onclick="window.location.href='../html/sondage.html';">
        Accéder au sondage
        </button>
    </div>
    <div class="indicateurs">
        <h2>Indicateurs</h2>
        <p>Accéder aux indicateurs obtenus grâce au sondage. </p>
        <a href=""><button class="button" >Accéder aux indicateurs</button></a>
    </div>
</div>
<footer>    <a href="#">Liens utiles</a>
    <a href="#">Documentation</a>
    <a href="#">Agenda</a>
    <a href="#">Démarches administratives</a>
    <a href="#">Accueil téléphonique</a>
    <a href="#">Accueil en régions</a>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>