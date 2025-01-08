<?php
header("Content-Type: application/json");
try {
    // Connexion à la base de données
    $pdo = new PDO("sqlite:../data/data.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL
    $sql = "SELECT S.idLieu, count(S.id) AS nombrePresent, qDV.libelle AS nom  
            FROM sondage S 
            INNER JOIN qualiteDeVie qDV ON S.idQualite = qDV.id  
            GROUP BY idQualite";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Récupération des résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($results) {
        // Si des résultats sont trouvés, les retourner en JSON
        echo json_encode($results);
    } else {
        // Sinon, retourner une erreur ou un message vide
        echo json_encode(["error" => "Aucune donnée trouvée"]);
    }
} catch (PDOException $e) {
    // Gérer l'erreur de connexion ou de requête
    echo json_encode(["error" => $e->getMessage()]);
}
?>
