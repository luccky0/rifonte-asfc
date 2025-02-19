<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association Française du Syndrome de Fatigue Chronique</title>
    <script src="../js/animation.js" defer></script>
    <script src="../js/qsn.js" defer></script>
    <link rel="stylesheet" href="../css/style_qsn.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

<div class="intro">
    <h1><span class="bold">Association Française du Syndrôme de Fatigue Chronique</span></h1>
    <div class="onglets">
        <a class="Pacing" href="pacing.php"><div class="title" >Pacing</div></a>
        <a class="SFC" href="https://www.asso-sfc.org/syndrome-fatigue-chronique.php"><div class="title">Le SFC, la maladie</div></a>
        <a class="DouleurChronique" href="https://www.asso-sfc.org/fibromyalgie-douleur-chronique.php"><div class="title" >La douleur chronique</div></a>
    
    </div>
    
</div>

<div class="about-section">
    <h2>Qui sommes-nous?</h2>
    <p>Vous êtes concerné par un épuisement intense et durable survenu progressivement ou brutalement par exemple suite à une infection ? Il s'accompagne d'autres symptômes tels que des problèmes cognitifs, un brouillard mental, des douleurs, un sommeil non réparateur, une intolérance à l'effort immédiate ou différée, des troubles orthostatiques... ?Nous sommes là pour vous aider !
        Les permanences d' accueil sont assurées par des bénévoles qui sont pour la plupart atteints d'une encéphalomyélite myalgique/syndrome de fatigue chronique.</p>
    <div class="info-blocks-large">
        <div class="info-title">L'association a pour but et pour vocation :</div>
        <div class="association-goals">
            <ul>
                <li>Découvrir et informer les malades sur les causes du SFC/EM</li>
                <li>Accompagner les malades et leur entourage</li>
                <li>Offrir des conseils et soutenir dans le parcours de soins</li>
                <li>Organiser des événements comme des groupes de paroles, conférences et ateliers</li>
                <li>De donner accès aux adhérents à toutes les informations ou toutes les avancés medicales ayant fait l'objet
                 de publications fiables suceptibles de les aider dans leurs parcours medicales.
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="propositions">
    <h2>L'Association propose...</h2>
    <div class="proposition">
        <div class="proposal-card">
            <h3>Pour ses adhérents :</h3>
            <p>Un accueil téléphonique et des réunions régionales dans des locaux associatifs ou sous forme de visios.
                Des ateliers sur des thématiques telles que le "pacing"
                Une lettre d'informations (merci pour votre indulgence quant au rythme de ces lettres d'info, ce sont des bénévoles qui en sont chargées et nous sommes peu nombreux !)
                Des ressources complémentaires sur une page facebook et une chaîne Youtube</p>
        </div>
        <div class="proposal-card">
            <h3>Pour tout public :</h3>
            <p>Des conférences de médecins, chercheurs, etc (replays à disposition sur la chaîne Youtube).
                Des réunions d'information.
                Des actions locales à l'occasion notamment du 12 MAI, Journée internationale del'EM/SFC .</p>
        </div>
    </div>
    <div class="note">
        <p><strong>NOTE IMPORTANTE

        </strong>
        </p>
            <p>Les ressources de l'association proviennent essentiellement des cotisations et des dons de ses adhérents. L'ASFC fonctionne grâce à l'engagement personnel de ses bénévoles. Aucun bénévole de l'association n'est salarié. L'essentiel des dons est affecté à la recherche.Dans le cadre de la loi "informatique et liberté" et afin de préserver l'anonymat des adhérents et des malades qui nous contactent, chaque bénévole est tenu à une stricte confidentialité et est signataire d'une charte respectant la déontologie qui lui est attachée..Notre association a un statut national mais possède également des délégations régionales qui accueillent les malades souhaitant une information.</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
