<?php
session_start();
require_once './flash.php';

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
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_nom'] = $user['nom'];
                $_SESSION['user_prenom'] = $user['prenom'];
                $_SESSION['admin'] = $user['administrateur'];

                if ($_SESSION['admin']) {
                    header('Location: ./espace_admin.php');
                } else {
                    header('Location: ./espace_adherent.php');
                }
                exit;
            } else {
                setFlashMessage(" mot de passe incorrect.", "danger");
                header('Location: ./authentification.php');
                exit;
            }
        } else {
            setFlashMessage("Identifiant incorrect ", "danger");
            header('Location: ./authentification.php');
            exit;
        }
    } catch (PDOException $e) {
        setFlashMessage("Erreur interne, veuillez réessayer plus tard.", "danger");
        header('Location: ./authentification.php');
        exit;
    }
} else {
    http_response_code(405);
    echo "Méthode non autorisée.";
}
