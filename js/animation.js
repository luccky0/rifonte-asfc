document.addEventListener("DOMContentLoaded", function() {
 
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

document.addEventListener("DOMContentLoaded", () => {
    // Crée le bouton pour augmenter la taille du texte
    const btnAugmenterText = document.createElement("button");
    btnAugmenterText.id = "augmente-la-taille-text";
    btnAugmenterText.textContent = "⬆️";

    // Crée le bouton pour réduire la taille du texte
    const btnReduireText = document.createElement("button");
    btnReduireText.id = "reduire-la-taille-text";
    btnReduireText.textContent = "⬇️";

    // Ajoute les boutons au DOM
    document.body.appendChild(btnAugmenterText);
    document.body.appendChild(btnReduireText);

    // Ajoute les événements pour augmenter et réduire la taille du texte
    btnAugmenterText.addEventListener("click", () => {
        document.body.classList.add("augmente-taille");
        document.body.classList.remove("diminue-taille");
    });

    btnReduireText.addEventListener("click", () => {
        document.body.classList.add("diminue-taille");
        document.body.classList.remove("augmente-taille");
    });
});
