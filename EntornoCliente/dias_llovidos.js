'use strict'
/*  Recoger el número de mes, el día y los litros llovidos hasta que no se desee introducir más. Los meses y días podrán estar repetidos.
    Mostrar los nombres de los meses con el total de litros llovidos.
    Mostrar el día más lluvioso en la forma: "El día más lluvioso ha sido el 7 de Marzo".
    Mostrar el nombre de los meses ordenados descendentemente por número de litros llovidos. Este apartado debe hacerse en primer lugar sin usar 
    objetos (solo tablas) y en segundo lugar haciendo uso de objetos que contengan el nombre del mes y el total de litros. */


   /*  var meses = [];
    var diasylitros = [];
    var flag = true;
    var totalLitros = 0;
    do{
        meses.push(parseInt(prompt("dame el numero del mes")));
        diasylitros.push([parseInt(prompt("dame el numero del dia")),parseInt(prompt("dame el numero de litros"))]);
        flag = confirm("¿Desea continuar?");
    }while(flag);


    console.log(diasylitros);
    // debugger;
    for (var i = 0; i < diasylitros.length; i++) {
        for (var k = 0; k < diasylitros[i].length; k++) {      
            
            if (diasylitros[i][k]==meses[k+1]) {
                totalLitros+= diasylitros[i][1];
            }
        }
        console.log(`El mes de ${meses[i]} llovió ${totalLitros}`);
    } */


var total = [];
var meses = [];
var f = [],c = [];
var datos = [f][c];

             for(var f=0;f<31;f++){//totalizamos la tabla para el 4 apartado

                    total[f]=0;
                    for(var c=0;c<12;c++){
                        total[f]=datos[f][c];
                    }
             }
             for(var f=0;f<31;f++){//Sacamos el mes con su total
                 document.write(meses[f] + "" + total[f]);
             }

             //con dos for y un if(datos[f][c]>mayor) averiguas 
             for(var f=0;f<31;f++){
                 for(var c=0;c<12;c++){
                     if(datos[f][c]>mayor){
                        mayor=datos[f][c];
                        f.aux=f;
                        c.aux=c;
                     }
               
                 }
           
             }
           
             document.write(c.aux+1 +  meses[f.aux]);