<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        try {

            $db = new PDO('sqlite:../data/data.sqlite');


            $db->exec("CREATE TABLE IF NOT EXISTS adherent (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nom TEXT NOT NULL,
                prenom TEXT NOT NULL,
                email TEXT NOT NULL UNIQUE,
                password TEXT NOT NULL
            )");

            $stmt = $db->prepare("INSERT INTO adherent (prenom, nom, email, password) VALUES (:prenom, :nom, :email, :password)");
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            echo "Inscription réussie !";
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                echo "Erreur : Cet email est déjà enregistré.";
            } else {
                echo "Erreur : " . $e->getMessage();
            }
        }
    } else {
        echo "Méthode non autorisée.";
}



