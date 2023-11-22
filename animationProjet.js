gsap.from('.lienProjet',{ 
    duration :1.2,
    x:1000,
    opacity: 0,
  
})

gsap.from('.contact .circle',{ 
    duration:4,
    opacity: 0,
    stagger:0.5,
    ease:"bounce", 
    scrollTrigger:{
                trigger : "footer",
                toggleActions : 'restart none none none'
                
     }
     
  
})