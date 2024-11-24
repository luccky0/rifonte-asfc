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
    btnAugmenterText.innerHTML = "⬆️"; // Affiche uniquement une flèche vers le haut

    // Crée le bouton pour réduire la taille du texte
    const btnReduireText = document.createElement("button");
    btnReduireText.id = "reduire-la-taille-text";
    btnReduireText.innerHTML = "⬇️"; // Affiche uniquement une flèche vers le bas

    // Ajoute les boutons au DOM
    document.body.appendChild(btnAugmenterText);
    document.body.appendChild(btnReduireText);

    // Ajoute des événements pour manipuler la taille du texte
    let tailleActuelle = 1; // Taille de base
    const maxTaille = 2.5;
    const minTaille = 0.5;

    btnAugmenterText.addEventListener("click", () => {
        if (tailleActuelle < maxTaille) {
            tailleActuelle += 0.5;
            document.body.style.fontSize = `${tailleActuelle}em`;
        } else {
            alert("Taille maximale atteinte !");
        }
    });

    btnReduireText.addEventListener("click", () => {
        if (tailleActuelle > minTaille) {
            tailleActuelle -= 0.5;
            document.body.style.fontSize = `${tailleActuelle}em`;
        } else {
            alert("Taille minimale atteinte !");
        }
    });
});



