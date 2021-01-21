const aumentar = document.querySelector('.aumentar');
const disminuir = document.querySelector('.disminuir');
const foto = document.querySelector('#lenin');

aumentar.addEventListener('click', ()=>{
        let width = parseInt(foto.clientWidth)
        let heigh = parseInt(foto.clientHeight)
        foto.setAttribute('width',width * 2)
        foto.setAttribute('heigh', heigh * 2)
})


disminuir.addEventListener('click', ()=>{
        let width = parseInt(foto.clientWidth)
        let heigh = parseInt(foto.clientHeight)
        foto.setAttribute('width',width / 2)
        foto.setAttribute('heigh', heigh / 2)
})
