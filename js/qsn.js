// Attendre que le DOM soit complètement chargé
document.addEventListener("DOMContentLoaded", function() {
    // Créer un bouton pour le mode sombre
    const button = document.createElement("button");
    button.id = "toggle-dark-mode";
    button.textContent = "🌙";

    // Ajouter le bouton au body
    document.body.appendChild(button);

    // Sélectionner le body et ajouter la fonctionnalité de mode sombre
    const body = document.body;

    button.addEventListener('click', () => {
        body.classList.toggle('dark-mode');

        // Changer le texte du bouton selon le mode actuel
        if (body.classList.contains('dark-mode')) {
            button.textContent = "☀️";
        } else {
            button.innerText="🌙";
        }
    });
});
