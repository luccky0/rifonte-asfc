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
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style_pacing.css'>
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

    <h1><span class="bold">Association Française du Syndrôme de Fatigue Chronique</span></h1>
    <div class="onglets">
        <a class="QuiSommesNous" href="Qui-sommes-nous.php"><div class="title" >Qui Sommes nous ?</div></a>
        <a class="SFC" href="https://www.asso-sfc.org/syndrome-fatigue-chronique.php"><div class="title">Le SFC, la maladie</div></a>
        <a class="DouleurChronique" href="https://www.asso-sfc.org/fibromyalgie-douleur-chronique.php"><div class="title" >La douleur chronique</div></a>
    </div>


    <br>
    <h2> Pacing c'est quoi ?</h2>
    <div>    <p> Il s'agit d'un ensemble d'outils et de pratiques pour adapter votre quotidien en fonction de votre niveau d'énergie disponible 
        - Retrouvez-les dans le petit guide pratique du pacing conçu par l'ASFC.Vous êtes adhérent.e à l'ASFC, 
        le guide pratique du pacing vous sera envoyé gratuitement lors de votre adhésion ;
        vous pourrez également participer à des ateliers en petit groupe pour échanger sur vos pratiques du pacing et les améliorer ! 
        <a href=""> Contactez nous !</a>
    </p></div>

    <div class="gris">
        <div class="echange">
            <p>
                Pour échanger sur les objets et astuces utiles dans le pacing :<br>
                <a href="https://www.facebook.com/groups/2625791651054619/?ref=share">Groupe de partage facebook Air&Go sur le "pacing" par Izaline, déléguée ASFC AURA</a><br>
                Suivez notre blog "tutos pacing" :<br>
                <a href="https://www.facebook.com/groups/2625791651054619/?ref=share">Blog de l'ASFC sur le pacing : articles, témoignages, outils en pdf...</a>
            </p>
        </div>
        <div class="webinaire">
            <h4>WEBINAIRES SUR LE PACING</h4>
            <p>Oser son rythme avec le pacing (Outils, témoignages, capitalisation) - 21 novembre 2021 (1ère édition de la Journée des Fatigues).</p>
        </div>
    </div>
    
    <div class="livre">
        <img src="../image/gide_pacing.jpg" alt="Petit Guide Pratique du Pacing" class="livre-img">
        <div class="procurer">
            <h4>COMMENT SE PROCURER LE PETIT GUIDE PRATIQUE DU PACING ?</h4>
            <p>
                Ce guide pratique est adressé systématiquement à tout nouvel adhérent.<br><br>
                Si vous n'êtes pas adhérent ou si vous souhaitez un livret supplémentaire,<br>
                il vous sera envoyé en précisant votre adresse complète et en réglant par virement<br>
                le montant correspondant au coût d'envoi (affranchissement et enveloppe) soit 3 euros pour un livret<br>
                via l'accès <a href="https://www.apayer.fr/fr/index.html?idCible=asfc-assfrancaisesyndromefatig">Monetico</a> 
                (choisir autre dans le menu déroulant et préciser "guide pacing" sur la ligne "Référence").<br><br>
                Pour l'international, merci d'écrire à <a href="mailto:contact@asso-sfc.org">contact@asso-sfc.org</a>, afin de régler le port international par virement.<br><br>
                Pour les associations et professionnels de santé intéressés par le petit guide du pacing, écrire à 
                <a href="mailto:contact@asso-sfc.org">contact@asso-sfc.org</a>.
            </p>
        </div>
    </div>
    
    
    <div class="extrait">
        <h2>Extrait : Editorial du PETIT GUIDE PRATIQUE DU PACING (version janvier 2023)</h2><br>
        <p>
            Vous qui lirez ce guide êtes sans doute concerné par une fatigue intense, durable, par l'épuisement, bien au-delà de la fatigue naturelle que tout le monde connaît. Comment vivre avec une « dette d'énergie » permanente ?<br>
            Vous qui étiez très actif avant la maladie, vous vous posez mille questions.<br>
            Dois-je renoncer à tout ce que j'ai encore envie de faire ? Dois-je me reposer tout le temps ou bien dois-je me forcer quand je n'ai plus l'énergie pour faire ?<br>
            Vivre avec une Encéphalomyélite Myalgique (« EM », que vous connaissez peut-être sous le nom de « SFC », Syndrome de Fatigue Chronique, ou « EM/SFC »), c'est vivre avec une enveloppe d'énergie limitée et variable selon les jours. C'est aussi le quotidien de personnes touchées par un syndrome post-infectieux (à la suite de la COVID notamment) ou par d'autres maladies chroniques, du fait de la maladie elle-même, et/ou des traitements.<br>
            Le but de ce guide est de vous aider à adapter votre rythme de vie face à une énergie qui fait défaut, qui fluctue et qui limite vos activités.Le concept de pacing - littéralement « adapter son rythme, son allure » - vient des sports d'endurance. Il y est utilisé pour atteindre des objectifs en contrôlant la fatigue. Le vôtre sera ne pas dépasser votre enveloppe d'énergie quotidienne.Ce guide a été conçu par des malades de profils variés, qui ont mis en commun les savoirs issus de leur expérience, leurs tâtonnements, leurs échecs et leurs réussites.<br>
            Vous aussi, vous devrez sans doute expérimenter et tâtonner, car chaque cheminement avec une maladie chronique est singulier. Nous faisons toutefois le pari de vous faciliter la route, en traçant pour vous quelques chemins empruntés avec succès par d'autres.Nous vous souhaitons de trouver votre propre zone d'équilibre.<br>
            L'équipe de l'ASFCLe<br><br>
             « pacing », c'est adapter son rythme de vie en fonction de l'enveloppe énergétique disponible au jour le jour. Cette stratégie diminuera la fréquence et l'intensité du malaise post-effort et permettra une expansion de l'enveloppe énergétique, et par conséquent une rémission de la maladie.
             Dr A. Ghali(interniste, CHU d'Angers)<br><br>
             L'ASFC remercie très vivement tous les malades co-auteurs ou contributeurs.
        </p>
    </div>
    <div class="publication"><h2>PUBLICATIONS INTERNATIONALES SUR LES EFFETS DU PACING</h2>
        <p>Ghali, A., Lacombe, V., Ravaiau, C., Delattre, E., Ghali, M., Urbanski, G., & Lavigne, C. (2023). The relevance of pacing strategies in managing symptoms of post-COVID-19 syndrome. Journal of translational medicine, 21(1), 375. <br>
            <a href="https://doi.org/10.1186/s12967-023-04229-w">Publication du Dr Ghali</a><br>
            
            Sanal-Hayes, N.E.M., Mclaughlin, M., Hayes, L.D. et al. A scoping review of 'Pacing' for management of Myalgic Encephalomyelitis/Chronic Fatigue Syndrome (ME/CFS): lessons learned for the long COVID pandemic. J Transl Med 21, 720 (2023).<br>
            <a href="https://doi.org/10.1186/s12967-023-04229-w">Revue de synthèse sur le pacing dans l'EM/SFC et le Covid Long</a> <br>
            
            Barakou, I., Hackett, K. L., Finch, T., & Hettinga, F. J. (2023). Self-regulation of effort for a better health-related quality of life: a multidimensional activity pacing model for chronic pain and fatigue management. Annals of medicine, 55(2), 2270688. <br>
            <a href="https://doi.org/10.1080/07853890.2023.2270688">L'auto-régulation de l'activité pour une meilleure qualité de vie</a><br>
            
            Casson, S., Jones, M. D., Cassar, J., Kwai, N., Lloyd, A. R., Barry, B. K., & Sandler, C. X. (2022). The effectiveness of activity pacing interventions for people with chronic fatigue syndrome: a systematic review and meta-analysis. Disability and rehabilitation, 1–15. Advance online publication. <br>
            <a href="https://doi.org/10.1080/09638288.2022.2135776">Revue de synthèse sur le pacing dans l'EM/SFC</a><br></p>
    </div>
    <div class="prevenir">
        <h2>LE MALAISE POST-EFFORT ou EXACERBATION POST-EFFORT DES SYMPTOMES et COMMENT LE PREVENIR</h2>
        <p>Description et gestion du malaise post-effort</p>
        <div class="image">
            <img src="../image/img_fatique.png" alt="Image de fatigue">
        </div>
        <h3>ARTICLE DE FRANCE ASSOS SANTE SUR LE PACING</h3>
        <a href="https://www.france-assos-sante.org/2021/07/12/epuisement-et-pacing-une-methode-pour-apprendre-a-economiser-et-mieux-gerer-son-energie/">Lire l'article</a>
        
        <h3>ECHELLES DE CAPACITE ET DE SEVERITE DE l'EM/SFC</h3>
        <p>Copyright Jodid Basset (2005) pour la HFME Hummingbird's Foundation for ME (Australie)</p>
        

        
        <a href="https://www.asso-sfc.org/documents/100-Voir-les-echelles-.pdf">Voir les échelles</a>
        <p>Echelle en 3 parties :</p>
        <ul>
            <li>Partie 1. Echelle de capacité physique EM/SFC</li>
            <li>Partie 2. Echelle de capacité cognitive EM/SFC</li>
            <li>Partie 3. Echelle sévérité des symptômes EM/SFC</li>
        </ul>
        
        <h3>APPLICATIONS DE PACING SUR SMARTPHONE</h3>
        <p>Appli ME/CFS Pacing, de l'association EMERGE (Australie) : Cette application est conçue pour aider les personnes atteintes d'EM / SFC légère à modérée à mieux gérer leur consommation d'énergie quotidienne afin d'améliorer leur qualité de vie. Télécharger l'application sur le site de <a href="https://www.emerge.org.au/news/mecfs-pacing-app-2/">EMERGE</a></p>
        
        <h3>COMMUNIQUE DE PRESSE DE L'ASFC SUR LA GESTION POST-COVID</h3>
        <p>Que faire lorsque la fatigue se prolonge sur plusieurs mois ?</p>
        <a href="https://www.asso-sfc.org/documents/100-Communique-de-l-ASFC-sur-la-gestion--de-la-fatigue-post-covid-062020.pdf">Communiqué de l'ASFC sur la gestion de la fatigue post-covid 06.2020</a>
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