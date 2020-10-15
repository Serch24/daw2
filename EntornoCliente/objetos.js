function persona(nombre, edad){
   this.nombre = nombre;
   this.edad = edad;
   
}
function alumno (objPersona,nDwec,nDwes){
   this.persona = objPersona;
   this.notaWec = nDwec;
   this.nitaWes = nDwes;
   this.media = ()=> (this.notaWec + this.nitaWes)/2;
}

var nota1 = parseInt(prompt("dame la primera nota"));
var nota2 = parseInt(prompt("dame la segunda nota"));
var nombre = prompt("dame tu nombre");
var edad = parseInt(prompt("dame la edad"));

//objetos
var persona1 = new persona(nombre,edad);
var sergio = new alumno(persona1,nota1,nota2);
swal(`${sergio.persona.nombre} con edad ${sergio.persona.edad} tiene un promedio de ${sergio.media()}`);