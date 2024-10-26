const links = [{title:"Les objectifs", link: "../html/Qui-sommes-nous.html"},
    {title:"Agrément du ministère de la santé", link:"https://www.asso-sfc.org/asfc-agrement-ministeriel.php"},
    {title:"Déclaration en préfecture", link:"https://www.asso-sfc.org/asfc-declaration-prefecture.php"},
    {title:"Les statuts", link:"https://www.asso-sfc.org/asfc-statuts.php"},
    {title:"Conseil d'administration", link:"https://www.asso-sfc.org/asfc-conseil-administration.php"}];

const button = document.createElement('button');
button.id="btnLireAussi";
button.innerText="Lire aussi";
button.addEventListener('click',displayLinks)

const section = document.querySelector('.about-section .info-blocks-large')
section.append(button)

const div = document.createElement('div');
for (i = 0; i < 5; ++i) {
    const a = document.createElement('a');
    a.innerText = links.at(i).title
    a.href = links.at(i).link
    a.style.textDecoration="none"
    div.appendChild(a)
}
div.id="blockLinks"
div.style.display="none"
section.after(div)

let displayed = false
function displayLinks(){
    if(!displayed) {
        /*div.removeAttribute('hidden')*/
        div.style.display="flex"
    }
    else
       /* div.setAttribute('hidden','true')*/
        div.style.display="none"
    displayed = !displayed
}



