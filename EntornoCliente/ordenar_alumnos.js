'use strict'
var personas = [];
var flag = false;

    do{
        personas.push({nombre: prompt("dame el nombre del estudiante"), edad: parseInt(prompt("dame la edad del estudiante"))});
        flag = confirm("¿Desea continuar?");
    }while(flag);

    console.log();
    personas.sort((a,b)=>(a.nombre > b.nombre)? 1 :0,(a.nombre < b.nombre)? -1 :0)


