'use strict'
var personas = [];
var flag = false;
var flagg =false;
var personas_ordenadas =[];
     do{
        var nomb = prompt("dame el nombre del estudiante");
        var notas = [parseInt(prompt("dame las notas del estudiante"))]
        flagg = confirm("¿Quieres añadir mas notas?");
        
        while(flagg){
            var tmp = parseInt(prompt("dame las notas del estudiante"));
            notas.push(tmp);
            flagg = confirm("¿Quieres añadir mas notas?");
        }
        
        personas.push({nombre: nomb, notas: notas});

        flag = confirm("¿Desea continuar?");
    }while(flag);

    console.log("odenado ascendentemente...");

    personas_ordenadas=(personas.sort((a,b)=>{
        if (a.nombre.toUpperCase()< b.nombre.toUpperCase()) {
            return -1;
        }
        if (a.nombre.toUpperCase()> b.nombre.toUpperCase()) {
            return 1;
        }
        return 0;
    }));
var suma;
    for (let i = 0; i < personas_ordenadas.length; i++) {
        
        personas_ordenadas[i].notas.forEach((a) => {
            suma = suma + a;
        });

        // console.log(`${i}.) Nombre: ${personas_ordenadas[i].nombre}, promedio: ${}`);
        
    }
    console.log(suma);

/*     console.log("Ordenado descentemente...");
    console.log(personas.sort((a,b)=>{
        if (a.nombre.toUpperCase()< b.nombre.toUpperCase()) {
            return 1;
        }
        if (a.nombre.toUpperCase()> b.nombre.toUpperCase()) {
            return -1;
        }
        return 0;
    }));
 */ 


