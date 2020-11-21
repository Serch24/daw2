/* 
    Abrir hija.html a los 3 segundos de cargarse.
    2 segundos más tarde redimensionar la ventana abierta a 400 x 300 px.
    2 segundos más tarde mover la ventana abierta al punto 200 x 100 px.
    2 segundos más tarde cerrar la ventana abierta.
 */

setTimeout(() => {
    var ventana = window.open("hija.html", "prueba");
    setTimeout(() => {
        ventana.open("", "_self", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=300");
    }, 2000);
}, 3000);