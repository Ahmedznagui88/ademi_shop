


var elements_to_watch = document.querySelectorAll('.watch');
// callback 
var callback = function(items){
  items.forEach((item) => {
    if(item.isIntersecting){
      item.target.classList.add("in-page");
    } else{
      item.target.classList.remove("in-page");
    }
  });
}
// observer
var observer = new IntersectionObserver(callback, { threshold: 0.5 } );
// apply
elements_to_watch.forEach((element) => {
  observer.observe(element); 
});



let item = document.querySelector('.toggle');
let panel = document.querySelector('.panel');

 item.addEventListener("click", function() {

  panel.classList.toggle('attiva');

});

window.addEventListener('scroll', function(e) {
  if(window.scrollY > 750){
    document.querySelector('.row3col-r').classList.add('scroll-down');
  } else {
    document.querySelector('.row3col-r').classList.remove('scroll-down');
  }
});

document.addEventListener( 'DOMContentLoaded', function() {
  var splide = new Splide( '.splide', {
    type   : 'loop',
    perPage: 3,
  } );
  
  splide.mount();
} );


//carosello 1 //
/*const carousel = document.querySelector('.carousel');
const slides = Array.from(carousel.querySelectorAll('.slide'));

let currentSlide = 0;
const slideInterval = setInterval(nextSlide, 4000); // Intervallo di tempo tra le slide (in millisecondi)

function nextSlide() {
  // Rimuovi la classe "active" dalla slide corrente
  slides[currentSlide].classList.remove('active');
  
  // Incrementa l'indice della slide corrente
  currentSlide = (currentSlide + 1) % slides.length;
  
  // Aggiungi la classe "active" alla nuova slide corrente
  slides[currentSlide].classList.add('active');
  
}
window.addEventListener("load", function () {
  nextSlide()
})*/
//carosello 2//
function carosello() {
    let indice = 0;
    setInterval(() => {

        document.getElementById("carosello").style.transition = "2s opacity"
        document.getElementById("carosello").style.opacity = "0"

        setTimeout(() => {

            if (indice == 1) {
                document.getElementById("carosello").src = "https://images.unsplash.com/photo-1587836374828-4dbafa94cf0e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cm9sZXh8ZW58MHx8MHx8fDA%3D"
            } else if (indice == 2) {
                document.getElementById("carosello").src = "https://plus.unsplash.com/premium_photo-1676748933022-e1183e997436?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzd8fHByb2Z1bW98ZW58MHx8MHx8fDA%3D"
            } else if (indice == 3) {
                document.getElementById("carosello").src = "https://media.istockphoto.com/id/1333060261/it/foto/design-degli-interni-del-soggiorno-moderno.webp?b=1&s=170667a&w=0&k=20&c=r1wYunIpAogug8vV5PF650VEW2Uz6FA349fJq_vlZuA="

                indice = 0;
            }


            document.getElementById("carosello").style.transition = "2s opacity"
            document.getElementById("carosello").style.opacity = "1"
        }, 3000)

        indice++

    }, 5000)
   
 
}
window.addEventListener("load", function () {
  carosello()
})