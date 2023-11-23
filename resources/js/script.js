const swup = new Swup();


window.animationHome = function (){

    if (document.readyState !== 'loading') {

            let text = new SplitType("#ademi");

            gsap.from('.char' ,  {
                opacity: 0,

            });

            gsap.to('.char' ,  {
                y: 0,
                stagger: 0.05,
                duration: 4,
            });

        return;
      }
    };

    //*outline/cursor

    let outline = document.querySelector('.outline');
let cursor = document.querySelector('.cursor');
let links = document.querySelectorAll(' a');

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
        cursor.classList.remove('hover');
    });
});
 //!outline/cursor