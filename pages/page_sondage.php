<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Association Française du Syndrome de Fatigue Chronique</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style_sondage.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src='../js/animation.js' defer></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="accueil.php">
            <img src="../image/logo_asfc2.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.asso-sfc.org/asfc-adhesion.php">Adhésion & Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.asso-sfc.org/asfc-user-login-frm.php">Forum</a>
                </li>
            </ul>
            <div class="header-buttons">
                <a href="faireundon.php" class="don-btn">Comment faire un don ?</a>
                <a href="<?php echo !isset($_SESSION['user_id']) ? "../PHP/authentification.php" : ($_SESSION['admin'] == true ? "../PHP/espace_admin.php" : "../PHP/espace_adherent.php"); ?> " class="adh-btn">Espace adhérents</a>
            </div>
        </div>
    </div>
</nav>
<h1><span class="bold">Sondage</span></h1>
<form method="post" action="../PHP/sondage.php">
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <div class="mb-3">
        <label for="lieuDeVie" class="form-label">Lieu de vie</label>
        <select id="lieuDeVie" name="lieuDeVie" class="form-select" aria-label="Default select example">
            <option selected>Choisissez votre lieu de vie</option>
            <option value="1">Dans la famille en permanence</option>
            <option value="2">Dans la famille avec une solution d'accueil ou des activités en journée</option>
            <option value="3">Dans la famille principalement mais avec un accueil temporaire ou séquentiel en établissement</option>
            <option value="4">Dans un logement indépendant</option>
            <option value="5">Dans un habitat inclusif</option>
            <option value="6">Dans un foyer d'accueil médicalisé (FAM)</option>
            <option value="7">Dans une maison d'accueil spécialisé (MAS)</option>
            <option value="8">Dans un foyer de vie ou foyer d'hébergement</option>
            <option value="9">En IME avec internat</option>
            <option value="10">Hospitalisation en psychatrie</option>
            <option value="11">Autre</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="activite" class="form-label">Activité scolaire ou professionnelle</label>
        <select id="activite" name="activite" class="form-select" aria-label="Default select example">
            <option selected>Choisissez votre activité scolaire ou professionnelle</option>
            <option value="1">Scolarité en milieu ordinaire</option>
            <option value="2">Scolarité en dispositif spécialisé de l'Education Nationale</option>
            <option value="3">Instruction en famille</option>
            <option value="4">Scolarisé dans un établissement médico-social (IME, IMPRO)</option>
            <option value="5">Formation professionnelle</option>
            <option value="6">Etudes supérieures</option>
            <option value="7">Activité professionelle en milieu ordinaire</option>
            <option value="8">Activité professionnelle en milieu protégé (ESAT, Entreprise adaptée)</option>
            <option value="9">Sans aucune activité scolaire ou professionnelle</option>
            <option value="10">Autre</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="qualiteVie" class="form-label">Qualité de vie</label>
        <select id="qualiteVie" name="qualiteVie" class="form-select" aria-label="Default select example">
            <option selected>Choisissez votre qualité de vie</option>
            <option value="1">Très bonne, la fatigue n'impacte pas ma qualité de vie</option>
            <option value="2">Bonne, la fatigue impacte peu ma qualité de vie</option>
            <option value="3">Correcte, je suis souvent fatigué mais c'est supportable</option>
            <option value="4">Moyenne, je suis très souvent fatigué et cela influe sur ma santé mentale</option>
            <option value="5">Mauvaise, importante souffrance psychologigue et épuisement dû à la fatigue</option>
            <option value="6">Très mauvaise, je suis très fatigué, chaque action que je fais est épuisante et mon mental est au plus bas</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="besoinSoutien" class="form-label">Avez-vous besoin de soutien?</label>
        <select id="besoinSoutien" name="besoinSoutien" class="form-select" aria-label="Default select example">
            <option selected>Choisissez votre soutien</option>
            <option value="1">Non, je suis totalement autonome</option>
            <option value="2">Oui, une aide pour tous les actes de la vie quotidienne et la présence d'une tierce personne 24h/24</option>
            <option value="3">Oui, des interventions et stimulations ponctuelles mais quotidiennes (toilette, sorties, repas, communication...)</option>
            <option value="4">Oui, un soutien mental au téléphone ou présentiel</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<footer>
    <a href="#">Liens utiles</a>
    <a href="#">Documentation</a>
    <a href="#">Agenda</a>
    <a href="#">Démarches administratives</a>
    <a href="#">Accueil téléphonique</a>
    <a href="#">Accueil en régions</a>
</footer>
</body>
</html>