const titrePresent = document.querySelector('.first').textContent
gsap.set('.first', {text:''})
gsap.to('.first',{
    text:titrePresent,
    duration:2,
})

const maTimeline= gsap.timeline()


maTimeline.from('.dev',{ 
    duration :1.5,
    x : -300,
    opacity: 0,
  
})

maTimeline.from('.web',{ 
    duration :1.5,
    x : -300,
    opacity: 0,
  
})

maTimeline.from('.crea',{ 
    duration :1.5,
    x : -300,
    opacity: 0,
  
})

gsap.from('.titleDescr, .contenuDescr',{ 
    duration :1,
    opacity: 0,
    y: -100,
    scrollTrigger:{
                trigger : ".description",
                toggleActions : 'restart none none none'
     }
  
})



gsap.from('#par1',{ 
    duration :1,
    opacity: 0,
    x:-100,
    scrollTrigger:{
                trigger : "#section1",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('#par2',{ 
    duration :1,
    opacity: 0,
    x:-100,
    scrollTrigger:{
                trigger : "#contact",
                toggleActions : 'restart none none none'
     }
  
})

gsap.from('.contact .circle',{ 
    duration:4,
    opacity: 0,
    stagger:0.5,
    ease:"bounce", 
    scrollTrigger:{
                trigger : "#contact",
                toggleActions : 'restart none none none'
                
     }
     
  
})



  

/* maTimeline.from('.contenuDescr',{ 
    duration :1,
    opacity: 0,
    scrollTrigger:{
                trigger : ".contenuDescr",
                toggleActions : 'restart none none none'
     }
  
}) */

// gsap.from('.un',{
//     duration: 0.8,
//     x:-100,
//     opacity:0,
//     scrollTrigger:{
//         trigger : ".un",
//         toggleActions : 'restart none none none'
//     }
// })

// gsap.from('.cardContainer .card', {
//     scrollTrigger: {
//       trigger: '.cardContainer',
//       toggleActions: 'restart none none none',
//       // pin: true,
//       // start: 'center center',
//       // end: '+=500',
//       // scrub: 1
//     },
//     duration: 1.5,
//     x: -200,
//     opacity: 0,
//     rotation: 20,
//     stagger: 0.2
// })





