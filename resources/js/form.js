//* success message

setTimeout(function() {

    let message = document.getElementById('message');
    
    message.style.transform = "translateY(-48px)";
    message.style.opacity = "-1";
    message.style.transition = "3s";

    let form = document.getElementById('form');
    form.style.transition = "6.8s";
    form.style.transform = "translateY(-74px)";


}, 4000);


//!end message