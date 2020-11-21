/* 
    Contenga una variable cuyo contenido sea "variable1=valo1;variable2=valor2; . . . ;variablen=valorn".
    Extraiga las subcadenas separadas por el carácter ";".
    Para cada subcadena, separe el nombre de la variable de su valor y visualice ambos por separado. 
*/
let cookies = "nombre=sergio;edad=20;apellido=yaccelga";
let arrai_coma = cookies.split(";");
let arrai_igual = [];
for (let i = 0; i < arrai_coma.length; i++) {
    arrai_igual[i] = (arrai_coma[i].split("="));
}

for (let i = 0; i < arrai_igual.length; i++) {
    console.log(arrai_igual[i]);
}