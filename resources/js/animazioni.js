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
let item = document.querySelector('.toggle');
let panel = document.querySelector('.panel');

/* item.addEventListener("click", function() {

  panel.classList.toggle('attiva');

});

const links = document.querySelectorAll("ul.menu-scroll a");

links.forEach((link) => {
  link.addEventListener("click", clickHandler);
})

