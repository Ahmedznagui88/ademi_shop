// elements
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

//*categoria

/* let ricaricapagina = setTimeout(function() {
 window.location.reload();

}, 9000);
 */



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

//funzione che ingetta il testo in realtime//

/*let input = document.getElementById('input');
let output = document.getElementById('output');

input.addEventListener("keyup", function() {

  let testo = input.value;
output.innerHTML = testo;

});*/


/*const links = document.querySelectorAll("ul.menu-scroll a");

links.forEach((link) => {
  link.addEventListener("click", clickHandler);
})*/

