document.addEventListener("DOMContentLoaded", function() {
    // Créer un bouton
    const button = document.createElement("button");
    button.id = "toggle-dark-mode";
    button.textContent = "🌙"; // Utiliser un symbole de lune pour le mode sombre

    // Ajouter le bouton au body
    document.body.appendChild(button);

    // Sélectionner le body et ajouter la fonctionnalité de mode sombre
    const body = document.body;

    button.addEventListener('click', () => {
        body.classList.toggle('dark-mode');

        // Changer le texte du bouton selon le mode actuel
        if (body.classList.contains('dark-mode')) {
            button.textContent = "☀️"; // Changer à un symbole de soleil
        } else {
            button.textContent = "🌙"; // Remettre à un symbole de lune
        }
    });
});


