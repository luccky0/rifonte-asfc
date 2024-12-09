<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

        $stmt = $db->prepare("INSERT INTO sondage (age, lieu_de_vie, activite, qualite_vie, besoin_soutien) VALUES (:age, :lieuDeVie, :activite, :qualiteVie, :besoinSoutien)");
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':lieuDeVie', $lieuDeVie);
        $stmt->bindParam(':activite', $activite);
        $stmt->bindParam(':qualiteVie', $qualiteVie);
        $stmt->bindParam(':besoinSoutien', $besoinSoutien);


        $stmt->execute();
        echo "Les données ont été enregistrées avec succès !";

    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
