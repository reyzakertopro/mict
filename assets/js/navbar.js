const burger= document.querySelector('#hamburger');
const navMenu= document.querySelector('.nav-menu');
const hero= document.querySelector('.hero');
const nav= document.querySelector('nav');

window.onscroll= ()=> {
  if(!nav.classList.contains('active')) {
    nav.classList.toggle('scrolled', window.scrollY> 0);

  }

};

burger.onclick= ()=> {
  navMenu.classList.toggle('clicked');
  hero.classList.toggle('clicked');
  nav.classList.toggle('clicked');

};

document.onclick= (e)=> {
  if(!nav.contains(e.target)||
     navMenu.children[0].contains(e.target)||
     navMenu.children[1].contains(e.target)||
     navMenu.children[2].contains(e.target)||
     navMenu.children[3].contains(e.target)||
     navMenu.children[4].contains(e.target)) {
       navMenu.classList.remove('clicked');
       hero.classList.remove('clicked');
       nav.classList.remove('clicked');

     }

};
