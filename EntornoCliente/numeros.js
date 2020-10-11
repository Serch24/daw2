// function multiplicar(a,b){
//     return a*b;
// }

// function potencia(a,b){
//     return Math.pow(a,b);
// }

var uno = parseInt(prompt("dame un numero"));
var dos = parseInt(prompt("dame otro numero"));

var total = (uno,dos)=> uno*dos;
var total2 = (uno,dos) => Math.pow(uno,dos);
var total3 = (a) => a == 1 ? 1 : a * total3(a -1);

document.write(`<h1>Multiplicación: ${total(uno,dos)}</h1> <br>`);
document.write(`<h1>potencia: ${total2(uno,dos)}<h1> <br>`);
document.write(`<h1>factorial de ${uno}! es : ${total3(uno)}<h1><br>`);
document.write(`<h1>factorial de ${dos}! es : ${total3(dos)}<h1>`);
