async function fetchRepartition() {
    try{
    const reponse = await fetch('../php/repartitionAdherents.php');
    const data = await reponse.json();
    const totalCell = document.getElementById('totalLieuDeVie');
    const tableBody = document.getElementById('lieuDevieTable');

// Remplir le tableau avec les données
    let compteur =0;
        data.forEach(d => {compteur+=d.nombrePresent;});
    data.forEach(d => {
        const row = tableBody.insertRow(); // Insérer une nouvelle ligne
        const cell1 = row.insertCell(0);  // Insérer la première cellule
        const cell2 = row.insertCell(1);  // Insérer la deuxième cellule
        const cell3 = row.insertCell(2);  // Insérer la troisème cellule

        cell1.textContent = d.nom;
        cell2.textContent = d.nombrePresent;
            cell3.textContent = ((d.nombrePresent*100 )/compteur).toFixed(2) + '%';
        });
    totalCell.innerHTML = `<strong>${compteur}</strong>`;
    }

    catch (error){
        console.error('Erreur lors de la récupération des données,', error);
    }
}

async function fetchAgeMoyen() {
    try{
        const reponse = await fetch('../php/ageMoyenAdhrent.php');
        const data = await reponse.json();
        const tableBody = document.getElementById('ageMoyenActivite');


// Remplir le tableau avec les données
        data.forEach(d => {
            const row = tableBody.insertRow(); // Insérer une nouvelle ligne
            const cell1 = row.insertCell(0);  // Insérer la première cellule
            const cell2 = row.insertCell(1);  // Insérer la deuxième cellule

            cell1.textContent = d.nom;
            cell2.textContent = Math.round(d.ageMoyen);

        });


    }
    catch (error){
        console.error('Erreur lors de la récupération des données,', error);
    }
}
fetchRepartition();
fetchAgeMoyen();