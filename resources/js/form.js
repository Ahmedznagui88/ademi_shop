//* success message




setTimeout(function() {

    let message = document.getElementById('message');
    message.style.transition = "5s";
    message.style.transform = "translateY(-48px)";
    message.style.opacity = "-1";
 

   let form = document.getElementById('form');
    form.style.transition = "6.8s"
    form.style.transform = "translateY(-74px)";
}, 8000);
//!end message