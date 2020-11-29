const h1 = document.querySelector(".mostrar")
const reg = new RegExp(/[nombre]$/g)//busco la cookie por 'nombre', es estático, no es dinamico, lo sé.
if (reg.test(document.cookie)) {
    h1.innerHTML = `La cookie en JS es ${document.cookie}`
}else{
    h1.innerHTML="No existe la cookie en JS";
}