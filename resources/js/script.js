

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


gsap.registerPlugin(ScrollTrigger);

//!diveHead 1
gsap.to(".divHead",{
    x: 0,
    duration: 1.5,
}) 

gsap.to(".divHead",{
    x: -800,
    scale: 1.2,
    rotateX: 50,
    scrollTrigger: {
        trigger: ".divHead",
        start: "top 30%",
        end: "top 9%",
        scrub: 1.4, 
        delay: 4,
        pinType: "fixed",
          pinSpacing: true,
        /* markers:{
          startColor: "blue",
          endColor: "red",
        } */
        
    }
})


//*diveHead 2
gsap.to(".divHead2",{
  x: 0,
  duration: 1.5,
})

gsap.to(".divHead2",{
  x: 800,
    scale: 1.2,
    rotateX: -60,
    scale: 1.5,
    scrollTrigger: {
        trigger: ".divHead",
        start: "top 30%",
        end: "top 9%",
        scrub: 1.4, 
        delay: 4,
        pinSpacing: 3,
        /* markers:{
          startColor: "blue",
          endColor: "red",
        } */
        
    }
})

//!secImg1
gsap.from(".divSecImg",{
  x: 1200,

  delay: 1,
})

gsap.to(".divSecImg",{
  x: 0,
  
  
    duration: 20,
    scrollTrigger: {
        trigger: ".divSecImg",
        start: "top 40%",
        end: "bottom 20%",
        scrub: 1,
       
       
       /*  markers:{
          startColor: "blue",
          endColor: "red",
        }, */
     
        
    },
    stragger: {
      scale: 1.2,
    }
    
}) 




gsap.from(".divSecImg2",{
  x: 1200,
  opacity: 0,
  delay: 3,
})

gsap.to(".divSecImg2",{
  x: 0,
  
    duration: 22,
    scrollTrigger: {
        trigger: ".divSecImg2",
        start: "top 44%",
        end: "bottom 20%",
        scrub: 1,
        pinSpacing: 3, 
     /*    markers:{
          startColor: "blue",
          endColor: "red",
        }, */
     
        
    },
    
}) 



gsap.from(".divSecImg3",{
  x: -1200,
  opacity: 0,
  delay: 1,
})

gsap.to(".divSecImg3",{
  x: 0,
  
    duration: 20,
    scrollTrigger: {
        trigger: ".divSecImg3",
        start: "top 40%",
        end: "bottom 20%",
        scrub: 1,
        pinSpacing: 3, 
       /*  markers:{
          startColor: "blue",
          endColor: "red",
        }, */
     
        
    },
    
}) 

gsap.from(".divSecImg4",{
  x: -1200,
  opacity: 0,
  delay: 3,
})

gsap.to(".divSecImg4",{
  x: 0,
  
    duration: 22,
    scrollTrigger: {
        trigger: ".divSecImg4",
        start: "top 44%",
        end: "bottom 20%",
        scrub: 1,
        pinSpacing: 3, 
      /*   markers:{
          startColor: "blue",
          endColor: "red",
        }, */
     
        
    },
    
}) 






