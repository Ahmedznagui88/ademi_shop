const swup = new Swup();

let text = new SplitType("#ademi", "#bg-register-login");

gsap.from('.img-logo-register' ,{
    opacity: 0,
    
});

gsap.to('.img-logo-register' ,{
    y: 0,
    stagger: 100,
    
    duration: 10,
    
});

//*outline/cursor

let outline = document.querySelector('.outline');
let cursor = document.querySelector('.cursor');
let links = document.querySelectorAll('button, a, .btn');

document.addEventListener('mousemove', function(e) {
    let x = e.clientX;
    let y = e.clientY;
    
    outline.style.transform = `translate( calc(${x}px - 50%) , calc(${y}px - 50%) )`;
    cursor.style.transform = `translate( calc(${x}px - 50%) , calc(${y}px - 50%) )`;  
    
});

links.forEach((link) => {

    
    link.addEventListener('mouseover', () => {
        cursor.classList.add('hover');
        outline.classList.add('hover');
    });
    link.addEventListener('mouseleave', () => {
        
        cursor.classList.remove('hover');
        outline.classList.remove('hover');
    });
});
 //!outline/cursor

 //showPassword//

 window.mostrapassword = function() {

    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  window.vedipassword = function() {

    var x = document.getElementById("password_confirmation");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  
  window.checkpassword = function() {

    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
//backgorund register-login//
  let bg = window.document.getElementById('bg-register-login');
  bg.style.opacity="0";
  setTimeout(function (){

   bg.style.opacity="1"
   bg.style.transition="2s"

  },1500)

