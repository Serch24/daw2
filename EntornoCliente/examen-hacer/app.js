function Trayecto(Descripcion,Kmts,Calorias,Salida,Llegada){
	this.Descripcion = Descripcion
	this.Kmts = Kmts
	this.Calorias = Calorias
	this.Salida = Salida
	this.Llegada = Llegada
	this.media = function(){
		return (this.Kmts)/(this.Llegada.getTime() - this.Salida.getTime()) / (1000*60*60) ; 
	}
	this.duracion = function(){
		return (this.Salida.getTime() - this.Llegada.getTime()) 
	}
}

function Bicicleta(Modelo,FechaAdquisicion,Rutas){
	this.Modelo = Modelo
	this.FechaAdquisicion = FechaAdquisicion
	this.Rutas = Rutas
	this.dia_mas_rapido = function(){
		let indice=0
		let media=Rutas[0].media

		for(let i=0;i<Rutas.length;i++){
			if(!(media >= Rutas[i].media)){
				media = Rutas[i].media	
				indice = i
			}
		}
		return Rutas[indice].Salida
	}

	this.tiempo_total = function(){
		let total_mili=0
		for(let i=0;i<Rutas.length;i++){
			total_mili = Rutas[i].duracion() + total_mili
		}
		return total_mili
	}
}


/*
let arr = [new Trayecto("una-descripcion", 20, 10, new Date(2010,10,10), new Date(2010,10,12)),new Trayecto("una-descrip", 20, 10, new Date(2010,9,10), new Date(2010,9,12))]
const movistar = new Bicicleta("unmodelo", new Date(), arr) 
console.log(movistar.tiempo_total())

*/




















