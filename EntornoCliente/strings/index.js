/*  Hacer un programa que permita introducir por teclado una cadena y muestre cada carácter en una línea.
    Hacer un programa que permita chequear si un dato introducido es un DNI.
    Hacer un programa que permita chequear si un dato introducido se corresponde con un teléfono fijo de Madrid. */

/* let cadena = prompt("Introduce tu texto");
for (let i = 0; i < cadena.length; i++) {
    console.log(cadena.charAt(i));
} */

/* let chequear = /^[0-9]{8}[a-zA-Z]{1}$/g;
console.log(chequear.test("78342478E") ? "Es un DNI" : "No es un DNI"); */

let numero = /^(91|81)[0-9]{8}$/g;
console.log(numero.test("9189876157") ? " Es un numero de madrid" : "No es un numero de madrid");