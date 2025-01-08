async function fetchRepartition() {
    try{
    const reponse = await fetch('../php/repartitionAdherents.php');
    const data = await reponse.json();
    const totalCell = document.getElementById('totalLieuDeVie');
    const tableBody = document.getElementById('lieuDevieTable');


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

async function diagrammeCirculaire() {
    // Vérifiez que le fichier est bien chargé
    console.log("Le fichier script.js est chargé");


    try {
        const reponse = await fetch('../php/autonomieAdherent.php');
        const data = await reponse.json();
        console.log(data);
        const tableBody = document.getElementById('autonomie');


        tableBody.innerHTML = '';

        // Effacer les anciens éléments SVG
        d3.select("#chart").select("svg").remove();

        let tab = [];
        let compteur = 0;
        data.forEach(d => { compteur += d.nombrePresent; });
        data.forEach(d => {
            tab.push(((d.nombrePresent * 100) / compteur).toFixed(2) + '%');
        });

        const width = 500;
        const height = 500;
        const radius = Math.min(width, height) / 2;

        const color = d3.scaleOrdinal()
            .domain(data.map(d => d.category))
            .range(d3.schemeCategory10);

        const svg = d3.select("#chart")
            .append("svg")
            .attr("width", width)
            .attr("height", height)
            .append("g")
            .attr("transform", `translate(${(width / 2)}, ${(height / 2)})`);

        const pi = d3.pie().value(d => d.nombrePresent);

        const arc = d3.arc()
            .innerRadius(0)
            .outerRadius(radius);

        let values = [];
        let names = [];
        data.forEach(d => {
            values.push(d.nombrePresent);
            names.push(d.nom);
        });
        const dataTab = d3.pie()(values);

        svg.selectAll("path")
            .data(pi(data))
            .enter()
            .append("path")
            .attr("d", arc)
            .attr("stroke", "#fff")
            .attr("stroke-width", 2)
            .attr("fill", d => color(d.data.id));

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

        data.forEach(d => {
            const row = tableBody.insertRow();
            const cell1 = row.insertCell(0);

            cell1.textContent = d.nom;
            cell1.style.backgroundColor = color(d.id);
        });

    } catch (e) {
        console.log(e);
    }
}

async function qualiterDeVie() {
    try {
        const reponse = await fetch('../php/qualiterdevie_adherent.php');
        const data = await reponse.json();

        console.log("Données récupérées:", data);

        if (!data || data.error) {
            console.error("Erreur lors de la récupération des données:", data.error || "Aucune donnée disponible");
            return;
        }

        const totalAdherents = data.reduce((sum, d) => sum + d.nombrePresent, 0);
        console.log("Total des adhérents:", totalAdherents);

        const chartDiv = document.getElementById('qualiterdevie');
        chartDiv.innerHTML = "";  // Clear previous chart if any

        const width = 928;
        const height = 500;
        const marginTop = 30;
        const marginRight = 0;
        const marginBottom = 30;
        const marginLeft = 40;

        const x = d3.scaleBand()
            .domain(data.map(d => d.nom))
            .range([marginLeft, width - marginRight - 120])
            .padding(0.1);

        const y = d3.scaleLinear()
            .domain([0, d3.max(data, d => d.nombrePresent)])
            .range([height - marginBottom, marginTop]);

        const svg = d3.create("svg")
            .attr("width", width)
            .attr("height", height+300)
            .attr("viewBox", [0, 0, width, height])
            .attr("style", "max-width: 100%; height: auto;");

        svg.append("g")
            .attr("fill", "steelblue")
            .attr("transform", `translate(120,0)`)
            .selectAll()
            .data(data)
            .join("rect")
            .attr("x", d => x(d.nom))
            .attr("y", d => y(d.nombrePresent))
            .attr("height", d => y(0) - y(d.nombrePresent))
            .attr("width", x.bandwidth());

        svg.selectAll("text")
            .data(data)
            .join("text")
            .attr("x", d => x(d.nom) + x.bandwidth() / 2 + 115)
            .attr("y", d => y(d.nombrePresent) - 5)
            .attr("text-anchor", "middel")
            .attr("fill", "black")
            .text(d => d.nombrePresent);

        // Ajoutez l'axe X et le libellé
        svg.append("g")
            .attr("transform", `translate(120,${height - marginBottom})`)
            .call(d3.axisBottom(x).tickSizeOuter(0))
            .selectAll("text")
            .attr("transform", "rotate(-10)")
            .attr("text-anchor", "end");

        svg.append("g")
            .attr("transform", `translate(${marginLeft + 120} ,0)`)
            .call(d3.axisLeft(y))
            .call(g => g.select(".domain").remove())
            .call(g => g.append("text")
                .attr("x", marginLeft - 150)
                .attr("y", 10)
                .attr("fill", "currentColor")
                .attr("text-anchor", "start")
                .text("Nombre de personnes"));

        chartDiv.appendChild(svg.node());

    } catch (e) {
        console.error("Erreur:", e);
    }
}




async function main(){
    console.log("Début du programme");

    await fetchRepartition();

    await fetchAgeMoyen();

    await diagrammeCirculaire();

    await qualiterDeVie();

    console.log("Camembert affiché");
}
main();