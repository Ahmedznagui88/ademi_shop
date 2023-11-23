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