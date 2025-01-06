<?php

/**
 * Définit un message flash dans la session.
 *
 * @param string $message Le message à afficher.
 * @param string $type Le type de message (exemple : "success", "danger", "warning", "info").
 */
function setFlashMessage(string $message, string $type): void {
    if (!session_id()) {
        session_start();
    }
    $_SESSION['flash'][$type] = $message;
}

/**
 * Affiche les messages flash stockés dans la session et les supprime.
 */
function messageFlash(): void {
    if (!session_id()) {
        session_start();
    }

    if (isset($_SESSION['flash'])) {
        foreach ($_SESSION['flash'] as $type => $message) {
            echo "<div class='alert alert-$type alert-dismissible fade show' role='alert'>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                $message
                </div>";
        }
        unset($_SESSION['flash']);
    }
}
