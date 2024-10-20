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
  document.querySelector('body').classList.toggle('clicked');
  navMenu.classList.toggle('clicked');
  nav.classList.toggle('clicked');

};

document.onclick= (e)=> {
  if(!nav.contains(e.target)||
     navMenu.children[0].contains(e.target)||
     navMenu.children[1].contains(e.target)||
     navMenu.children[2].contains(e.target)) {
       document.querySelector('body').classList.remove('clicked');
       navMenu.classList.remove('clicked');
       nav.classList.remove('clicked');

     }

};
