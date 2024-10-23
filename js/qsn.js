const links = [{title:"Les objectifs", link: "../html/Qui-sommes-nous.html"},
    {title:"Agrément du ministère de la santé", link:"https://www.asso-sfc.org/asfc-agrement-ministeriel.php"},
    {title:"Déclaration en préfecture", link:"https://www.asso-sfc.org/asfc-declaration-prefecture.php"},
    {title:"Les statuts", link:"https://www.asso-sfc.org/asfc-statuts.php"},
    {title:"Conseil d'administration", link:"https://www.asso-sfc.org/asfc-conseil-administration.php"}];

const button = document.createElement('button');
button.id="btnLireAussi";
button.innerText="Lire aussi";
button.addEventListener('click',displayLinks)

function displayLinks(){
    const div = document.createElement('div');
    for(i=0;i<5;++i){
        const a = document.createElement('a');
        a.innerText=links.at(i).title
        a.href=links.at(i).link
        div.appendChild(a)
    }
    div.style.background="red"
    document.body.append(div)

}



const section = document.querySelector('.about-section .info-blocks-large')
section.append(button)