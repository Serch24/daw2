//Hacer un programa que muestre la fecha 90 días posterior a la de hoy.
let fecha_Actual = new Date();
let dias_90 = new Date(fecha_Actual.getTime() + 1000 * 60 * 60 * 24 * 90);
//console.log(dias_90);

//Hacer un programa que permita introducir un año, un mes y un día y
//muestre el día de la semana (Lunes, Martes, ...) que corresponde.

let anio_mes_dia = [];
/* anio_mes_dia.push({
    anio: parseInt(prompt("Introduzca el año")),
    mes: parseInt(prompt("Introduzca el mes")),
    dia: parseInt(prompt("Introduzca el dia"))
});

let dia_Semana = new Date(anio_mes_dia[0].anio, anio_mes_dia[0].mes, anio_mes_dia[0].dia);
switch (dia_Semana.getDay()) {
    case 0:
        console.log(`El dia de la semana fue: domingo`);
        break;
    case 1:
        console.log(`El dia de la semana fue: Lunes`);
        break;
    case 2:
        console.log(`El dia de la semana fue: Martes`);
        break;
    case 3:
        console.log(`El dia de la semana fue: Miercoles`);
        break;
    case 4:
        console.log(`El dia de la semana fue: Jueves`);
        break;
    case 5:
        console.log(`El dia de la semana fue: Viernes`);
        break;

    case 6:
        console.log(`El dia de la semana fue: Sabado`);
        break;
    default:
        console.log('Error');
        break;
} */

//Hacer un programa que muestre como título de la página web un cronómetro.
function seg() {
    var actual = new Date();
    var segundos = actual.getSeconds();
    document.title = segundos;
    console.log(segundos);
}
var set = setInterval("seg()", 1000);