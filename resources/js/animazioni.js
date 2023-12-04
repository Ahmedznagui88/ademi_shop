


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


