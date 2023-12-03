

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

gsap.to(".divSecImg",{
  x: 1200,
    duration: 20,
    
    scrollTrigger: {
        trigger: ".divSecImg",
        start: "top 40%",
        end: "bottom 20%",
        scrub: 1,
        duration:10, 
        delay: 4,
        pinSpacing: 3,
        /* markers:{
          startColor: "blue",
          endColor: "red",
        } */
        
    }
})

//* secImg2
gsap.to(".divSecImg2",{
  x: -1200,
    delay: 1, 
    
    opacity: 3,
    scrollTrigger: {
        trigger: ".divSecImg",
        start: "top 43%",
        end: "bottom 22%",
        
        scrub: 1,
        duration:10, 
        delay: 4,
        pinSpacing: 3,
        /* markers:{
          startColor: "blue",
          endColor: "red",
        } */
        
    }
})

//!secImg3
gsap.to(".divSecImg3",{
  x: 1200,
    duration: 20,
    
    scrollTrigger: {
        trigger: ".divSecImg",
        start: "top 36%",
        end: "bottom 23%",
        scrub: 1,
        duration:10, 
        delay: 4,
        pinSpacing: 3,
       /*  markers:{
          startColor: "blue",
          endColor: "red",
        }  */
        
    }
})

//* secImg4
gsap.to(".divSecImg4",{
  x: -1200,
    delay: 1, 
    
    opacity: 3,
    scrollTrigger: {
        trigger: ".divSecImg",
        start: "top 37%",
        end: "bottom 22%",
        
        scrub: 1,
        duration:10, 
        delay: 4,
        pinSpacing: 3,
        /* markers:{
          startColor: "blue",
          endColor: "red",
        } */
        
    }
})