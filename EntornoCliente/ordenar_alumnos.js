'use strict'
//Hacer un programa que permita introducir los datos de tantos alumnos como se desee.
//Cuando no se desee introducir más datos se mostrará un listado ordenado ascendentemente por nombre 
//con el nombre y nota media de cada alumno y otro listado similar pero ordenado descendentemente por nota media.

var personas = [];
var flag = false;
var flagg = false;
var personas_ordenadas = [];
var personas_ordenadas_descendente = [];
var promedios_descentes = [];
var suma = 0;
//dentro del "do" solo se piden los datos de nombre y las notas, en el caso de las notas lo que hago es hacer un while y preguntar
//varias veces las notas y las guardo en un array. 
do {
    var nomb = prompt("dame el nombre del estudiante");
    var notas = [parseInt(prompt("dame las notas del estudiante"))]
    flagg = confirm("¿Quieres añadir mas notas?");

    while (flagg) {
        var tmp = parseInt(prompt("dame las notas del estudiante"));
        notas.push(tmp);
        flagg = confirm("¿Quieres añadir mas notas?");
    }

    personas.push({ nombre: nomb, notas: notas, promedio: 0 });

    flag = confirm("¿Desea continuar añadiendo mas estudiantes?");
} while (flag);

console.log("------odenado ascendentemente-----");

//oderno por nombre el array.
personas_ordenadas = (personas.sort((a, b) => {
    if (a.nombre.toUpperCase() < b.nombre.toUpperCase()) {
        return -1;
    }
    if (a.nombre.toUpperCase() > b.nombre.toUpperCase()) {
        return 1;
    }
    return 0;
}));

//se le agrega el promedio
for (let i = 0; i < personas.length; i++) {
    personas[i].notas.forEach(c => {
        suma += c;
    });
    personas[i].promedio = (suma / personas[i].notas.length);
    suma = 0;
}

//muestra array odernado ascendentemente por nombre
for (var i = 0; i < personas_ordenadas.length; i++) {
    console.log(`Nombre: ${personas_ordenadas[i].nombre}, promedio: ${personas_ordenadas[i].promedio}`);
}


console.log("----Ordenado descendentemente----");
//ordena el array descentemente.
personas_ordenadas_descendente = (personas.sort((a, b) => a.promedio - b.promedio));

//muestra array odernado descendentemente por promedio
for (let i = 0; i < personas_ordenadas_descendente.length; i++) {
    console.log(`Nombre: ${personas_ordenadas_descendente[i].nombre}, promedio: ${personas_ordenadas_descendente[i].promedio}`);
}