/* 
Hacer un programa que permita:
Introducir el nombre, el valor y el tiempo en segundos que debe perdurar una cookie,
 de forma repetitiva hasta que no se deseen grabar más cookies.

A continuación debe permitir introducir el nombre de una cookie a consultar
 y mostrar su valor o el literal "No existe".
*/


function introducir(nombre, valor, segundos) {
    let actual = new Date();
    let seg = new Date(actual.getTime() + 1000 * segundos);
    let cookies_introducida = nombre + "=" + valor + ";" + "expires=" + seg.toUTCString();
    document.cookie = cookies_introducida;
}

function buscar(nombre) {
    let cookie_coma = (document.cookie.split(";"));
    let cookie_igual = [];
    let flag = false;
    for (let i = 0; i < cookie_coma.length; i++) {
        cookie_igual[i] = cookie_coma[i].split("=");
    }

    for (let i = 0; i < cookie_igual.length; i++) {
        if (nombre === cookie_igual[i][0].trim()) {
            console.log(`El valor de esa cookie es ${cookie_igual[i][1].trim()}`);
            flag = true;
            break;
        }
    }
    if (!flag) {
        console.log("La cookie no existe");
    }
}

do {
    var variables = {
        nombre: prompt("Ingrese el nombre de la cookie"),
        valor: prompt("Ingrese el valor de la cookie"),
        segundos: parseInt(prompt("Ingrese los segundos de la cookie"))
    }
    introducir(variables.nombre, variables.valor, variables.segundos);

    var confirmar = confirm("¿Quieres seguir añadiendo mas cookies?");
    if (!confirmar) {
        confirmar = confirm("¿Quieres ver alguna cookie creada?");
        if (confirmar) {
            var nombre_de_cookie = prompt("Introduce el nombre");
            buscar(nombre_de_cookie);
            confirmar = false;
        }
    }

}
while (confirmar);