


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



/* let item = document.querySelector('.toggle');
let panel = document.querySelector('.panel');

 item.addEventListener("click", function() {

  panel.classList.toggle('attiva');

}); */

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
function caroselloTesto() {
    let indice = 0;
    setInterval(() => {

        document.getElementById("textCarousel").style.transition = "2s opacity"
        document.getElementById("textCarousel").style.opacity = "0"

        setTimeout(() => {

            if (indice == 1) {
                document.getElementById("textCarousel").innerHTML = "Rendi magico il posto che ami con uno sguardo attento all' ambiente."
            } else if (indice == 2) {
                document.getElementById("textCarousel").innerHTML = "Acquista in sicurezza tramite i nostri metodi di pagamento semplificati."
            } else if (indice == 3) {
                document.getElementById("textCarousel").innerHTML = "Compra e vendi in totale sicurezza, i nostri revisori garantiscono l'originalità del prodotto tramite il nostro programma formativo partner."
            } else if (indice == 4) {
                document.getElementById("textCarousel").innerHTML = "Hai un negozio? Scopri le nostre offerte riservate ai rivenditori."    

                indice = 0;
            }


            document.getElementById("textCarousel").style.transition = "2s opacity"
            document.getElementById("textCarousel").style.opacity = "1"
        }, 3000)

        indice++

    }, 5000)
   
 
}
window.addEventListener("load", function () {
  caroselloTesto()
})

function carosello() {
  let indice = 0;
  setInterval(() => {

      document.getElementById("carosello").style.transition = "2s opacity"
      document.getElementById("carosello").style.opacity = "0"

      setTimeout(() => {

          if (indice == 1) {
              document.getElementById("carosello").src = "./media/vinyl.avif"
          } else if (indice == 2) {
              document.getElementById("carosello").src = "./media/homegreen.jpeg"
          } else if (indice == 3) {
              document.getElementById("carosello").src = "./media/orologio 1.avif"
          } else if (indice == 4) {
              document.getElementById("carosello").src = "./media/perfume2.avif"    

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