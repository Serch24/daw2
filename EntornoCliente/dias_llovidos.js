'use strict'
/* Recoger el número de mes, el día y los litros llovidos hasta que no se desee introducir más.
 Los meses y días podrán estar repetidos.
 Mostrar los nombres de los meses con el total de litros llovidos.
 Mostrar el día más lluvioso en la forma: "El día más lluvioso ha sido el 7 de Marzo".
 Mostrar el nombre de los meses ordenados descendentemente por número de litros llovidos.
  Este apartado debe hacerse en primer lugar sin usar objetos (solo tablas) 
  y en segundo lugar haciendo uso de objetos que contengan el nombre del mes y el total de litros. */


var flag = false;
var arrai = [];
var sumatorio = 0;
do {
    arrai.push({mes: parseInt(prompt("Introduce el numero del mes.")),dia: parseInt(prompt("Introduce el dia.")), litros: parseInt(prompt("Introduce los litros llovidos.")),totales: 0 });
    flag = confirm("¿desea continuar añadiendo?");
} while (flag);


for (let i = 0; i < arrai.length; i++) {
    switch (arrai[i].mes) {
        case 1: 
            arrai[i].totales += arrai[i].litros;
            break;
        case 2:
            arrai[i].totales += arrai[i].litros;
            break;
    
        case 3:
            arrai[i].totales += arrai[i].litros;
            break;

        case 4:
            meses_totatel = {mes: "abril", total: sumatorio};
            break;

        case 5:
            console.log("mayo");
            break;

        case 6:
            console.log("junio");
            break;
      
        case 7:
            console.log("julio");
            break;
        
        case 8:
            console.log("agosto");
            break;
    
        case 9:
            console.log("septiembre");
            break;
    
        case 10:
            console.log("octubre");
            break;

        case 11:
            console.log("noviembre");
            break;

        case 12:
            console.log("Diciembre");
            break;

        default:
            console.log('nonono');
            break;
    }
}

console.log(arrai);