<?php
if (!session_id()) session_start();
require_once './flash.php';

messageFlash();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Association Française du Syndrome de Fatigue Chronique</title>

    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style_authentification.css'>
    <script src="../js/animation.js" defer></script>

</head>
<body>
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
<div class="container mt-5">
    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="signin-tab" data-bs-toggle="tab" href="#signin" role="tab"
                   aria-controls="signin" aria-selected="true">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="signup-tab" data-bs-toggle="tab" href="#signup" role="tab" aria-controls="signup"
                   aria-selected="false">Inscription</a>
            </li>
        </ul>


        <div class="tab-content mt-3">

            <!-- Contenu de l'onglet "Connexion" -->
            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                <h3>Connexion</h3>
                <form method="post" action="connexion.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                        <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec qui que ce soit d'autre.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
                <br>
                <div>
                    <p>Notre site offre un ensemble d'informations générales accessibles à tous.<br>
                        Il est nécessaire d'être adhérent de l'association pour pouvoir accéder à l'ensemble des services de l'ASFC :<br>
                        - bulletins trimestriels,<br>
                        - conférences de médecins,<br>
                        - articles médicaux,<br>
                        - accès à la partie privée du site, etc...,<br>
                        <br>
                        Une adhésion est valable pendant 12 mois, c'est dire de date à date à partir du versement de la cotisation. Elle doit ensuite être renouvelée chaque année à la même date . Un rappel vous sera envoyé quelque temps auparavant.<br>
                        <br>
                        <br>
                        Créez votre compte et adhérez à l'association pour accéder à toutes les fonctionnalités du site.</p>
                </div>
            </div>
            <!-- Contenu de l'onglet "Inscription" -->
            <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                <h3>Inscription</h3>
                <form class="row g-3 needs-validation" action="inscription.php" method="post">
                    <div class="row g-3">
                    </div>
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label for="prenom" >Prénom</label>
                            <input type="text" id="prenom" class="form-control" placeholder="Votre prénom" aria-label="Prénom" name="prenom" pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s-]+" required>
                        </div>
                        <div class="col-md-8">
                            <label for="nom" >Nom</label>
                            <input type="text" id="nom" class="form-control" placeholder="Votre nom" aria-label="nom"  name="nom" required>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label for="email" >Mail</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label for="password" class="form-label">Mot de passe :</label>
                            <input type="password" class="form-control" id="password" name="password" required minlength="8" placeholder="Au moins 8 caractères">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-3">

                            <button class="btn btn-primary " type="submit">S'inscrire</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <a href="#">Liens utiles</a>
    <a href="#">Documentation</a>
    <a href="#">Agenda</a>
    <a href="#">Démarches administratives</a>
    <a href="#">Accueil téléphonique</a>
    <a href="#">Accueil en régions</a>
</footer>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>