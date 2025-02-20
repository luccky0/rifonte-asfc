<?php
if (!session_id()) session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Association Française du Syndrome de Fatigue Chronique</title>
    <script src="../js/animation.js" defer></script>
    <link href="../css/style_accueil.css" rel="stylesheet">
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
                    <a href="<?php echo  !isset($_SESSION['user_id']) ? "../PHP/authentification.php" : ($_SESSION['admin']==true ? "../PHP/espace_admin.php" : "../PHP/espace_adherent.php"); ?>" class="adh-btn">Espace adhérents</a>
                </div>
            </div>
        </div>
    </nav>
    <h1><span class="bold">Association Française du Syndrôme de Fatigue Chronique</span></h1>
    <!-----------------------ONGLETS CARRES------------------------------------->
    <div class="onglets">
        <a class="QuiSommesNous" href="Qui-sommes-nous.php"><div class="title" >Qui Sommes nous ?</div></a>
        <a class="Pacing" href="pacing.php"><div class="title" >Pacing</div></a>
        <a class="SFC" href="https://www.asso-sfc.org/syndrome-fatigue-chronique.php"><div class="title">Le SFC, la maladie</div></a>
        <a class="DouleurChronique" href="https://www.asso-sfc.org/fibromyalgie-douleur-chronique.php"><div class="title" >La douleur chronique</div></a>
    </div>


    <div class="conteneur">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../image/imageBleu1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5>VIDEO EMEA</h5>
                        <p>Pour commémorer le 12 mai 2024, l’European ME Alliance (EMEA) et ses membres (dont l'ASFC pour la France) ont produit une vidéo avec des textes en anglais et dans la langue du pays d’origine.
                            Communiqué de presse, résultats de l'enquête en rubrique Actus</p>
                        <div><a href="https://europeanmealliance.org/emea-meawareness2024.shtml">Plus d'infos</a></div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../image/imageBleu2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5>WEBINAIRE L'EM/SFC AUJOURD'HUI</h5>
                        <p>du lundi 13 mai 2024, par Mehdi Aoun Sebaïti, neuropsychologue, fondateur de Néocortex -
                            Découvrez le replay !</p>
                        <div><a href="https://www.youtube.com/watch?v=LZnMufVXohQ&t=674s">Plus d'infos</a></div>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="../image/imageBleu3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5>Live de l'afa "Maîtriser mes fatigues avec le pacing" du 9 novembre</h5>
                        <p>Découvrez le replay</p>
                        <div><a href="https://www.youtube.com/watch?v=Kh8n8FMciwo">Plus d'infos</a></div>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="../image/imageBleu4.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5>L’ASFC vous offre "le petit guide du pacing"</h5>
                        <p>Ou comment gérer son énergie au quotidien
                            pour apprivoiser l'épuisement intense</p>
                        <div><a href="https://www.asso-sfc.org/asfc-actualites-details-478.php">Plus d'infos</a></div>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="bloc">
            <img src="../image/JourneeFatigues.jpg" alt="logo de la journée des fatigués">
            <img src="../image/BiennaleFatigues.png" alt="logo de la biennale des fatigués">
        </div>
        <div class="bloc">
            <p>L'ASFC est à l'origine de la journée nationale des fatigués, qui se tient tous les 2 ans.<br><br><a href="https://www.youtube.com/channel/UCx3r09iGLaaJ02FXtufRLng">Découvrez les replays de la Biennale des Fatigues du 21 novembre 2023 sur la chaîne Youtube de la Journée/Biennale des fatigues</a></p>

        </div>
    </div>

    <div class="verbes"><h2>ACCUEILLIR - INFORMER</h2>
        <h2>AIDER - ACCOMPAGNER - ORIENTER - ALERTER</h2>
        <h2>AGIR</h2>
    </div>

    <p>
        <span class="bold">LA FATIGUE C'EST NATUREL, PAS L'EPUISEMENT INTENSE !</span> <br><br>
        Vous connaissez un épuisement qui dure, qui vous a contraint à réduire vos activités, qui s'accompagne d'autres symptômes (douleurs, sommeil non récupérateur, troubles cognitifs, intolérance à la station debout)... Vous vous questionnez sur l'origine de ses troubles, êtes en recherche de diagnostic, de pistes de solutions : contactez-nous !<br><br>L'Association Française du Syndrome de Fatigue Chronique est une association loi de 1901 à but non lucratif, créée en 1998 et <span class="bold">agréée au niveau national par le Ministère de la solidarité et de la Santé</span>, depuis 2010, pour représenter les usagers du système de santé<br><br><span class="bold">Agrément renouvelé en 2015 N° Agrément: N2015RN008<br>Agrément renouvelé en 2020 N° Agrément: N2020RN004</span><br><br>Elle est membre d'<span class="bold">ALLIANCE MALADIES RARES (AMR)</span>, et de <span class="bold">France Assos Santé</span>. Elle a été <span class="bold">reconnue d'Intérêt Général</span> et à ce titre peut recevoir des dons .

        Notre association a un statut national mais possède également des délégations régionales qui accueillent les malades souhaitant une information.

        L'ASFC collabore au développement d'une solution thérapeutique avec une PME innovante spécialisée en médecine basée sur les mécanismes : <a href="https://www.bmsystems.org/me-cfs">Bio-Modeling Systems</a>
    </p>

    <div class="liens">
        <h2>Liens vers nos différents réseaux</h2>
        <div>
            <a href="https://www.youtube.com/channel/UCAk5xc6CA0ApcOOhQWc2NUA/videos">· Chaine YouTube</a><br>
            <a href="http://blog.asso-sfc.fr/le-pacing/">· Notre blog</a><br>
            <a href="https://www.facebook.com/groups/2625791651054619/?ref=share">· Groupe Air&Go</a>
        </div>
        <a href="https://www.asso-sfc.org/documents/1-Telecharger-la-Plaquette-ASFC.pdf"><button  type="button">Télécharger la plaquette ASFC</button></a>
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