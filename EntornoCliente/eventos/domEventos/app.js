let contador = 1
var posicion
let h1 = document.getElementById("cambiar")
let colores=['#6B0900','#EE5547','#EB1400','#6B2620','#B80F00','#4342EB','#2AEBE2','#1918B8'];
h1.style.position = `absolute`
document.addEventListener("mousemove",(e)=>{
    // console.log(`se cargo ${contador} veces`)
    // h1.style.color =`rgba(${Math.floor(Math.random()*255)},${Math.floor(Math.random()*255)},${Math.floor(Math.random()*255)},0.3)`
    h1.style.left= `${e.clientX}px`
    h1.style.top= `${e.clientY}px`
    console.log(e.clientX,e.clientY)
})
addEventListener("click",(e)=>{
    console.log(e)
    h1.style.background= colores[Math.floor(Math.random()*colores.length)]
    h1.style.width= e.clientX+"px";
    h1.style.height= e.clientY+"px";
})