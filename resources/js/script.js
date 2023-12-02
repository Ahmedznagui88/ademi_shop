const swup = new Swup();

let text = new SplitType("#ademi", "#bg-register-login");

/* gsap.from('.img-logo-register' ,{
    opacity: 0,
    
}); */

/* gsap.registerPlugin(ScrollTrigger);
 let images = gsap.utils.toArray("#row-registerlogin");

images.forEach((image, i) => {
  gsap.to(image, {
    
  })
}) */


//*outline/cursor

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
/*   let bg = window.document.getElementById('bg-register-login');
  bg.style.opacity="0";
  setTimeout(function (){

   bg.style.opacity="1"
   bg.style.transition="2s"

  },1500)

 */