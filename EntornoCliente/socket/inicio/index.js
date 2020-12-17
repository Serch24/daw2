const socket = io()
const enviar = document.querySelector(".enviar")
const texto = document.querySelector("#texto")
const nombre = document.querySelector("#nombre")
const chats = document.querySelector(".chats")
enviar.addEventListener("click", () => {
    socket.emit('mensaje', {
        nombre: nombre.value,
        texto: texto.value
    })
})

socket.on('mensaje', (data) => {
    chats.innerHTML += `<h3>${data.nombre}: </h3><p>- ${data.texto}</p>`
})