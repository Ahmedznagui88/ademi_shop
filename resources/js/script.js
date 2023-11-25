const swup = new Swup();

let text = new SplitType("#ademi");

gsap.from('.char',{
    opacity: 0,
   
});

gsap.to('.char',{
    y: 0,
    stagger: 0.02,
    duration: 0.6,
});

//*outline/cursor

let outline = document.querySelector('.outline');
let cursor = document.querySelector('.cursor');
let links = document.querySelectorAll('a');

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

 /*document.getElementById('toggle-password')
.addEventListener('change', function() {

    var passinput = document.getElementById('password');

    if(this.checked){
        passinput.type = "text"
    } else {
        passinput.type = "password"
    }
});

document.getElementById('show-password')
.addEventListener('change', function() {

    var passinput = document.getElementById('password_confirmation');

    if(this.checked){
        passinput.type = "text"
    } else {
        passinput.type = "password"
    }
});

document.getElementById('mostra-password')
.addEventListener('change', function() {

    var passinput = document.getElementById('show');

    if(this.checked){
        passinput.type = "text"
    } else {
        passinput.type = "password"
    }
});*/