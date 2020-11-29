var mifecha = new Date();

//1000 milisegundos son 1 segundo, seguido de 1 min, 1 hora, 24horas y 90 dias;
var fuc = (1000*60*60*24*90);
mifecha.setTime(fuc + mifecha.getTime());
console.log(mifecha);
//------------------------------------------
var t;
//Dia de nacimiento
var cumple = new Date(2000,10,21);
console.log(cumple);

function crono(){
    var a = new Date();
    var tiempo = a.getSeconds();
    document.title=tiempo;
    if (tiempo == 50) {
        clearInterval(t);
        document.write("<h1>'f'</h1>");
    }
}

 t = setInterval("crono()", 1000);

/* if () {
    clearInterval(t);
} */
