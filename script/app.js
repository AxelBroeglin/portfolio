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

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar and main
const navbar = document.getElementById('navbar');
const stickyMain = document.getElementById('main-homepage');
// Get the offset position of the navbar
const sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    stickyMain.classList.add('stick-main');
  } else {
    navbar.classList.remove("sticky");
    stickyMain.classList.remove('stick-main');
  }
}
//clic sur menu doit changer la couleur de la nav. prendre en compte que nav et body ont 4vh de décalage quand nav va prendre 100vh