var mifecha = new Date();

var fuc = (1000*60*60*24*90);
mifecha.setTime(fuc + mifecha.getTime());
console.log(mifecha);


var cumple = new Date(2000,10,21);
console.log(cumple);

function crono(){
    var a = new Date();
    var tiempo = a.getSeconds();
    document.title=tiempo;
}

var t = setInterval("crono()", 1000);
if (confirm("quieres cancelar el cronometro?")) {
    clearInterval(t);
}
