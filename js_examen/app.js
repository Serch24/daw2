function Tramo(descripcion, distancia, tiempo) {
    this.descripcion = descripcion
    this.distancia = distancia
    this.tiempo = tiempo
    this.velocidad = function() {
        return this.tiempo
    }
}

function Viaje(destino, salida, tramos) {
    this.destino = destino
    this.salida = salida
    this.tramos = tramos
    this.duracion = function() {
        var tramos = 0
        var cont = 0
        for (let i = 0; i < this.tramos.length; i++) {
            tramos++;
            cont = this.tramos[i].tiempo + cont
        }
        return cont + (tramos * 30);
    }

    this.kmts = function() {
        var contador = 0;
        for (let i = 0; i < this.tramos.length; i++) {
            contador = this.tramos[i].distancia + contador
        }
        return contador
    }
    this.llegada = function() {
        return this.salida.getFullYear()
    }
}

var b = [new Tramo("viaje en avión", 10, 100), new Tramo("viaje en avión", 5, 50)]
var a = new Viaje("madagascar", new Date(2012, 12, 3), b)
    /* console.log(a.llegada()) */
console.log(new Date(2012, 11, 3))