<?php
header("Content-Type: application/json");
try {
    // Connexion à la base de données
    $pdo = new PDO("sqlite:../data/data.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL
    $sql = "SELECT S.idLieu, count(S.id) AS nombrePresent, L.libelle AS nom  FROM sondage S INNER JOIN lieuDeVie L ON S.idLieu = L.id  group by idLieu";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Récupération des résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Conversion en JSON
    echo json_encode($results);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>