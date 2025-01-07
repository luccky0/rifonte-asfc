<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    die("Erreur : l'utilisateur n'est pas connecté.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idPersonne = $_SESSION['user_id'];
    $age = $_POST['age'];
    $lieuDeVie = $_POST['lieuDeVie'];
    $activite = $_POST['activite'];
    $qualiteVie = $_POST['qualiteVie'];
    $besoinSoutien = $_POST['besoinSoutien'];

    if (empty($age) || empty($lieuDeVie) || empty($activite) || empty($qualiteVie) || empty($besoinSoutien)) {
        die("Tous les champs sont requis.");
    }

    try {

        $db = new PDO('sqlite:../data/data.sqlite');
        $db->exec("PRAGMA foreign_keys = ON;");
        $db->exec("CREATE TABLE IF NOT EXISTS activite(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            libelle TEXT NOT NULL
        )");

        $db->exec("CREATE TABLE IF NOT EXISTS qualiteDeVie(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            libelle TEXT NOT NULL
        )");

        $db->exec("CREATE TABLE IF NOT EXISTS lieuDeVie(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            libelle TEXT NOT NULL
        )");

        $db->exec("CREATE TABLE IF NOT EXISTS soutien(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            libelle TEXT NOT NULL
        )");
        $db->exec("CREATE TABLE IF NOT EXISTS sondage(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                age INTEGER NOT NULL,
                idPersonne INTEGER REFERENCES adherent(id) UNIQUE NOT NULL,
                idActivite INTEGER REFERENCES activite(id) NOT NULL,
                idQualite INTEGER REFERENCES qualiteDeVie(id) NOT NULL,
                idLieu INTEGER REFERENCES lieuDeVie(id) NOT NULL,
                idSoutien INTEGER REFERENCES soutien(id) NOT NULL
            )");


        $stmt = $db->prepare("INSERT INTO sondage (age,idPersonne,idActivite,idQualite,idLieu,idSoutien) VALUES (:age, :idpersonne, :activite, :qualiteVie, :lieuDeVie, :besoinSoutien)");
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':idpersonne', $idPersonne);
        $stmt->bindParam(':activite', $activite);
        $stmt->bindParam(':qualiteVie', $qualiteVie);
        $stmt->bindParam(':lieuDeVie', $lieuDeVie);
        $stmt->bindParam(':besoinSoutien', $besoinSoutien);


        $stmt->execute();
        echo "Les données ont été enregistrées avec succès !";
        if($_SESSION['admin'])
            header('Location: ./espace_admin.php');
        else
            header('Location: ./espace_adherent.php');

    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
