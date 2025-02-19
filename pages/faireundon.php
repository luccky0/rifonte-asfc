<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Association Française du Syndrome de Fatigue Chronique</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style-faireundon.css'>
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
                    <a href="<?php echo !isset($_SESSION['user_id']) ? "../PHP/authentification.php" : ($_SESSION['admin'] == true ? "../PHP/espace_admin.php" : "../PHP/espace_adherent.php"); ?> " class="adh-btn">Espace adhérents</a>
                </div>
            </div>
        </div>
    </nav>
    
    
    <h1><span class="bold">Association Française du Syndrôme de Fatigue Chronique</span></h1>
    <div class="onglets">
        <a class="QuiSommesNous" href="Qui-sommes-nous.php"><div class="title" >Qui Sommes nous ?</div></a>
        <a class="Pacing" href="pacing.php"><div class="title" >Pacing</div></a>
        <a class="SFC" href="https://www.asso-sfc.org/syndrome-fatigue-chronique.php"><div class="title">Le SFC, la maladie</div></a>
        <a class="DouleurChronique" href="https://www.asso-sfc.org/fibromyalgie-douleur-chronique.php"><div class="title" >La douleur chronique</div></a>
    </div>
    <br>
    <h2 class="titre"> FAIRE UN DON </h2>
    <br>

    <div class="gris">
        <div class="echange">
            <h2>FAIRE UN DON EN LIGNE</h2>
            <p>Vous pouvez faire un don du montant de votre choix directement en ligne par carte bancaire ou via un compte paypal en cliquant sur le bouton ci-dessous.
            </p>
            <a class="donbutton" style="text-decoration:none" href="https://www.paypal.com/donate?token=vk81IiSx2_D-Vz8UpoHv5smqhdJcJkX4jvHgYxbU4wupg_4nwUJi6_WXkfnfgARIi5RRQM6v76oa2-5U"><div >FAIRE UN DON</div>  </a>

            <img class="imgdon" src="../image/donimg.jpg">

        </div>
        <div class="webinaire">
            <h2>FAIRE UN DON PAR COURRIER</h2>
            <p>Vous pouvez également nous envoyer vos dons par courrier en renvoyant le formulaire de don accompagné de votre chèque à l'adresse suivante :<br><br>
            </p><h2>ASFC</h2><p> <br> Association Française du Syndrome de Fatigue Chronique <br> Maison des Associations, 19 rue wicardenne - 62200 BOULOGNE S/MER
                
                </p>
                <a class="donbutton" href="../documents/60-Formulaire-de-don.pdf" style="text-decoration:none"><div >TÉLÉCHARGER LE FORMULAIRE DE DON</div></a>

        </div>
    </div>
    
    <br>
    <div class="explication">    <p>
        Totalement indépendante de l 'Etat, reconnue d'intérêt général, agréée au niveau national, l'ASFC accomplit sa mission grâce à la générosité de ses donateurs.
        Son objectif est de permettre aux recherches les plus prometteuses d'aboutir au plus vite.
        Tous les dons versés à l'association sont réservés aux projets de recherche
        Les dons bénéficient d'une déduction fiscale, dans la limite de 20% du revenu imposable,
        selon la législation en vigueur pour l'année en cours.
        Je donne 10 Euros soit 3,40 Euros après déduction fiscale
        Je donne 50 Euros soit 15,00 Euros après déduction fiscale


    </p></div>

    
    
    

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