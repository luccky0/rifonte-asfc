<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {

        $db = new PDO('sqlite:../data/data.sqlite');

        $stmt = $db->prepare("SELECT * FROM adherent WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Connexion réussie
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_nom'] = $user['nom'];
                $_SESSION['user_prenom'] = $user['prenom'];
                $_SESSION['admin'] = $user['administrateur'];
                echo "Connexion réussie. Bienvenue, " . htmlspecialchars($user['prenom']) . " " . htmlspecialchars($user['nom']) . "!";
                if($_SESSION['admin'])
                    header('Location: ../html/espace_admin.php');
                else
                    header('Location: ../html/espace_adherent.php');

            } else {
                echo "Mot de passe incorrect.";
            }
        } else {
            echo "Aucun utilisateur trouvé avec cet email.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "Méthode non autorisée.";
}



