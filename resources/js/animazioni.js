


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
                document.getElementById("carosello").src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdkvMJDPvL5lBtmrViEL-7mJ1Ii_yznEdpvpRPxl6_bOkOY-hf67sNewOvEeKm3e1yqp0&usqp=CAU"
            } else if (indice == 2) {
                document.getElementById("carosello").src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScYEwVKC05E5Cx5ZZS55PBmskQ2Ocfb4HKFg&usqp=CAU"
            } else if (indice == 3) {
                document.getElementById("carosello").src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR59saMRzhRJgD3720JEtAr3j03yRU701kHcA&usqp=CAU"

                indice = 0;
            }


            document.getElementById("carosello").style.transition = "2s opacity"
            document.getElementById("carosello").style.opacity = "1"
        }, 2000)

        indice++

    }, 4000)
   
 
}
window.addEventListener("load", function () {
  carosello()
})