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


    async function diagrammeCirculaire(){
        // Vérifiez que le fichier est bien chargé
        console.log("Le fichier script.js est chargé");

    // 1. Préparer les données
        try {
            const reponse = await fetch('../php/autonomieAdherent.php');
            const data = await reponse.json();
            console.log(data);

    // 2. Dimensions
            let tab = [];

            let compteur =0;
            data.forEach(d => {compteur+=d.nombrePresent;});
            data.forEach(d => {
                tab.push(((d.nombrePresent * 100) / compteur).toFixed(2) + '%');
            });

            const width = 500;
            const height = 500;
            const radius = Math.min(width, height) / 2;

    // 3. Couleurs
            const color = d3.scaleOrdinal()
                .domain(data.map(d => d.category))
                .range(d3.schemeCategory10);

    // 4. Canevas SVG
            const svg = d3.select("#chart")
                .append("svg")
                .attr("width", width )
                .attr("height", height )
                .append("g")
                .attr("transform", `translate(${(width / 2)}, ${(height / 2)})`);

    // 5. Générer les arcs
            const pi = d3.pie().value(d=>d.nombrePresent);

            const arc = d3.arc()
                .innerRadius(0)
                .outerRadius(radius);
            let values = [];
            let names = [];
            data.forEach(d=> {values.push(d.nombrePresent);
            names.push(d.nom);});
            const dataTab = d3.pie()(values);
            console.log(dataTab);

    // 6. Ajouter les segments
            svg.selectAll("path")
                .data(pi(data))
                .enter()
                .append("path")
                .attr("d", arc)
                .attr("stroke", "#fff")  // Couleur de la bordure (blanche ici)
                .attr("stroke-width", 2) // Épaisseur de la bordure
                .attr("fill", d => color(d.data.id))

            ;

    // 7. Ajouter les labels
            svg.selectAll("text")
                .data(dataTab)
                .enter()
                .append("text")
                .attr("transform", d => `translate(${arc.centroid(d)})`)
                .attr("text-anchor", "middle")
                .text((d, i) => tab[i])
                .style("font-size", "12px")
                .style("fill", "#fff");
            console.log(pi(data));

            const tableBody = document.getElementById('autonomie');

    // Remplir le tableau avec les données
            data.forEach(d => {
                const row = tableBody.insertRow(); // Insérer une nouvelle ligne
                const cell1 = row.insertCell(0);  // Insérer la première cellule
                const cell2 = row.insertCell(1);  // Insérer la deuxième cellule

                cell1.textContent = d.nom;
                cell2.textContent = ((d.nombrePresent*100 )/compteur).toFixed(2) + '%';
            });

        }
        catch (e){
            console.log(e);
        }
    };
async function qualiterDeVie() {
    try {
        const reponse = await fetch('../php/qualiterdevie_adherent.php');
        const data = await reponse.json();

        console.log("Données récupérées:", data); // Ajoutez cette ligne pour vérifier les données

        if (!data || data.error) {
            console.error("Erreur lors de la récupération des données:", data.error || "Aucune donnée disponible");
            return; // Si aucune donnée n'est reçue ou une erreur survient
        }

        // Calcul du total des adhérents pour la répartition
        const totalAdherents = data.reduce((sum, d) => sum + d.nombrePresent, 0);
        console.log("Total des adhérents:", totalAdherents);

        // Remplissage du tableau "répartition des adhérents dans les lieux de vie"
        const tableLieuDeVie = document.getElementById("lieuDevieTable");
        data.forEach(d => {
            const row = tableLieuDeVie.insertRow();
            const cell1 = row.insertCell(0);
            const cell2 = row.insertCell(1);
            const cell3 = row.insertCell(2);

            cell1.textContent = d.nom;
            cell2.textContent = d.nombrePresent;
            cell3.textContent = ((d.nombrePresent / totalAdherents) * 100).toFixed(2) + "%";
        });

        // Affichage du total dans la table
        document.getElementById("totalLieuDeVie").textContent = totalAdherents;

        // Création du graphique
        const chartDiv = document.getElementById('qualiterdevie');
        chartDiv.innerHTML = "";  // Clear previous chart if any

        const width = 928;
        const height = 500;
        const marginTop = 30;
        const marginRight = 0;
        const marginBottom = 30;
        const marginLeft = 40;

        // Déclarez l'échelle x (position horizontale)
        const x = d3.scaleBand()
            .domain(data.map(d => d.nom))  // Utilisez "nom" comme domaine (nom de la qualité de vie)
            .range([marginLeft, width - marginRight])
            .padding(0.1);

        // Déclarez l'échelle y (position verticale)
        const y = d3.scaleLinear()
            .domain([0, d3.max(data, d => d.nombrePresent)])  // Utilisez "nombrePresent" pour l'axe Y
            .range([height - marginBottom, marginTop]);

        // Créez le conteneur SVG
        const svg = d3.create("svg")
            .attr("width", width)
            .attr("height", height)
            .attr("viewBox", [0, 0, width, height])
            .attr("style", "max-width: 100%; height: auto;");

        // Ajoutez un rectangle pour chaque barre
        svg.append("g")
            .attr("fill", "steelblue")
            .selectAll()
            .data(data)
            .join("rect")
            .attr("x", d => x(d.nom))  // Position horizontale basée sur le nom
            .attr("y", d => y(d.nombrePresent))  // Position verticale basée sur nombrePresent
            .attr("height", d => y(0) - y(d.nombrePresent))  // Calcul de la hauteur de la barre
            .attr("width", x.bandwidth());  // Largeur des barres

        // Ajoutez des étiquettes pour chaque barre
        svg.selectAll("text")
            .data(data)
            .join("text")
            .attr("x", d => x(d.nom) + x.bandwidth() / 2)
            .attr("y", d => y(d.nombrePresent) - 5)
            .attr("text-anchor", "middle")
            .attr("fill", "white")
            .text(d => d.nombrePresent);

        // Ajoutez l'axe X et le libellé
        svg.append("g")
            .attr("transform", `translate(0,${height - marginBottom})`)
            .call(d3.axisBottom(x).tickSizeOuter(0));

        // Ajoutez l'axe Y et le libellé
        svg.append("g")
            .attr("transform", `translate(${marginLeft},0)`)
            .call(d3.axisLeft(y))
            .call(g => g.select(".domain").remove())
            .call(g => g.append("text")
                .attr("x", -marginLeft)
                .attr("y", 10)
                .attr("fill", "currentColor")
                .attr("text-anchor", "start")
                .text("? Nombre de présents"));

        chartDiv.appendChild(svg.node());

    } catch (e) {
        console.error("Erreur:", e);
    }
}




async function main(){
    console.log("Début du programme");

    // Appeler d'autres fonctions asynchrones si nécessaire
    await fetchRepartition();
    await fetchAgeMoyen();

    // Créer le camembert après récupération des données
    await diagrammeCirculaire();

    await qualiterDeVie();

    console.log("Camembert affiché");
}
main();