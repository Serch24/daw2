const tl = gsap.timeline({defaults: {ease: 'power1.out' }})
const rv = document.querySelector(".rv")

tl.to('.sergio',{opacity:'1', duration:2, stagger:.7})
tl.to('ul',{opacity: '1' , duration:2},'-=2')
tl.to('li',{y:'0%' , duration:1, stagger:0.14},'-=1')
tl.to('.fab',{top:'920px',duration: 3}, "-=1")
tl.to('.fab',{left:'1850px',duration: 3}, "-=1")

rv.addEventListener("click", ()=>{
   tl.reverse()
})
