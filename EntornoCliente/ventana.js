function ventana(alto,ancho,abierta) {
    this.alto = alto;
    this.ancho = ancho;
    this.abierta = abierta;
    this.mostrar = mostrarVentana;
}
function mostrarVentana() {
    return this.abierta;
}

var mive = new ventana(24,12,true);

console.log(mive.mostrar());