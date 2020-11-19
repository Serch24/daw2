var base = parseInt(prompt("dame la base"));
var exponente = parseInt(prompt("dame el exponente"));
var a = parseInt(prompt("Hola que haces"));
var b = new Date();

//var total = (uno, dos) => uno * dos;
//var potencia = (a, b) => b == 0 ? 1 : a * (potencia(a, b - 1));
function potencia(a, b) {
    if (a == 0) {
        return 0;
    } else if (b == 0) {
        return 1;
    } else {
        return a * (potencia(a, b - 1));
    }
}
//var total3 = (a) => a == 1 ? 1 : a * total3(a - 1);

//document.write(`<h1>Multiplicación: ${total(uno,dos)}</h1> <br>`);
document.write(`<h1>potencia: ${potencia(base,exponente)}<h1> <br>`);
//document.write(`<h1>factorial de ${uno}! es : ${total3(uno)}<h1><br>`);
//document.write(`<h1>factorial de ${dos}! es : ${total3(dos)}<h1>`);
