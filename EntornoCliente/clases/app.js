'use strict';
function Persona(nombre,edad){
        this.nombre=nombre
        this.edad = edad
        this.elmetodo = ()=>{
            console.log(`Hola ${this.nombre} tienes ${this.edad + 1} años! `)
        }
        this.otromas = function(){
            return `Hola ${this.nombre} tienes ${this.edad} años! ` 
        }
}
/*Hace lo mismo que el metodo (elmetodo)*/
/*Esto a lo mejor santigo no lo entenderá así que no lo voy a usar :c*/
Persona.prototype.lomismo = function() {
            console.log(`Hola ${this.nombre} tienes ${this.edad + 2} años! `)
}
const mipersona = new Persona("sergio",20)
mipersona.lomismo()
mipersona.elmetodo()
console.log(mipersona.otromas())
