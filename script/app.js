const menuBtn = document.querySelector('.menu-btn');
const menuMbl = document.querySelector('.menu-mobile');
const nav = document.querySelector('.nav-mobile');

let menuOpen = false;
let menuShown = false;
let navOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        menuOpen = false;
    }
    if(!menuShown) {
        menuMbl.classList.add('shown');
        menuShown = true;
    } else {
        menuMbl.classList.remove('shown');
        menuShown = false;
    }
    if(!navOpen) {
        nav.classList.add('nav-open');
        navOpen = true;
    } else {
        nav.classList.remove('nav-open');
        navOpen = false;
    }
});


//clic sur menu doit changer la couleur de la nav. prendre en compte que nav et body ont 4vh de décalage quand nav va prendre 100vh