
let text = new SplitType("#ademi");



gsap.from('.char' ,  {
    opacity: 0,
    
});

gsap.to('.char' ,  {
   
    y: 0,
    stagger: 0.02,
    duration: 2,
}); 

/* let text = new SplitType(".text-1");

let texts = gsap.utils.toArray(".text-1");
let tl = gsap.timeline();
let splitText = new SplitType(texts);

texts.forEach(() => {
    
   tl
   .from(splitText.chars,  {
       opacity: 0,
       

   }, "<")
    
   .to(splitText.chars, {
       opacity: 0,

   }, "<1")
   
});
 */