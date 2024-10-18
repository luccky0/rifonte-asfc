const button = document.getElementById('toggle-button');

button.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    
    // Change le texte du bouton en fonction du mode
    if (document.body.classList.contains('dark-mode')) {
        button.textContent = 'Désactiver le mode sombre';
    } else {
        button.textContent = 'Activer le mode sombre';
    }
});

