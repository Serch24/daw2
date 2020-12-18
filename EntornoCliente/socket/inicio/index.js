const socket = io()
const enviar = document.querySelector(".enviar")
const texto = document.querySelector("#texto")
const nombre = document.querySelector("#nombre")
const chats = document.querySelector(".chats")
const escribiendo = document.querySelector(".escribir")
const repe = document.querySelector(".repe")
const personas_online = document.querySelector(".online")
const formu = document.querySelector("#formu")
let letras = [];
let contador=0

enviar.addEventListener("click", () => {
    if(!texto.value == ''){
        socket.emit('mensaje', {
            nombre: nombre.value,
            texto: texto.value
        })  
    }
    console.log(formu)
})
socket.on('mensaje', (data) => {
    contador++
    if (contador>=3) {
        if(letras.includes(data.texto)){
            repe.innerHTML = `<p><span>Palabra repetida</span>: ${data.texto}</p>`
        }else{
            letras.push(data.texto)            
            chats.innerHTML += `<h3>${data.nombre}: </h3><p>$ ${data.texto}</p>`
        }
    }else{
        letras.push(data.texto)
        chats.innerHTML += `<h3>${data.nombre}: </h3><p>$ ${data.texto}</p>`
    }
    texto.value = ""
    console.log(letras)
})
socket.on('saludo',(data)=>{
    personas_online.innerHTML = `${data.personas}`
})

texto.addEventListener("keydown",(e)=>{
    if(e.keyCode == 13){  
        socket.emit('mensaje', {
            nombre: nombre.value,
            texto: texto.value
        })
    }
    socket.emit("escribiendo",{
        nombre: nombre.value,
        escribir: true
    })
})

texto.addEventListener("keyup",()=>{
    socket.emit("escribiendo",{
        nombre: nombre.value,
        escribir: false
    })

})

 socket.on('escribiendo',(data)=>{
    if(data.escribir){
        escribiendo.innerHTML = `${data.nombre} está escribiendo tonterias...`
    }else{
        escribiendo.innerHTML = ` `
    }
}) 
